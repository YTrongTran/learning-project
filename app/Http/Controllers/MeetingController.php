<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\MeetingConfirmation;
use Illuminate\Support\Facades\Log;

class MeetingController extends Controller
{
    public function index(){
        return view('pages.create-meeting');
    }

    public function createMeeting(Request $request)
    {
        $validated = $this->validate($request, [
            'title' => 'required',
            'email' => 'required|email',
            'start_date_time' => 'required|date',
            'duration_in_minute' => 'required|numeric',
        ]);

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' .self::generateToken(),
                'Content-Type' => 'application/json',
            ])->post("https://api.zoom.us/v2/users/me/meetings", [
                'topic' => 'Meeting with ' . $validated['title'],
                'type' => 2, // 2 for scheduled meeting
                'start_time' => Carbon::parse($validated['start_date_time'])->toIso8601String(),
                'duration' => $validated['duration_in_minute'],
            ]);
            
            // return $response->json();

            if ($response->successful()) {
                $meeting = $response->json();
                session(['meeting' => $meeting]);
                
                // Log::debug('Mail configuration:', config('mail'));
                try {
                    Mail::to($validated['email'])->send(new MeetingConfirmation($meeting));
                } catch (\Exception $e) {
                    // Log::error('Mail error: ' . $e->getMessage());
                    return redirect()->back()->with('error', 'Failed to send email. Please check logs for details.');
                }

                return redirect()->route('meeting.confirm');
            }
            else{
                return redirect()->route('meeting.index')->withErrors([
                    'error' => 'Failed to create meeting: ' . $response->body(),
                ]);
            }

    

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function confirm()
    {
        $meeting = session('meeting');
        // dd($meeting);

        if (!$meeting) {
            return redirect()->route('meeting.index')->withErrors(['error' => 'Meeting data not found.']);
        }

        return view('pages.confirm-meeting', compact('meeting'))->with('success', 'Meeting scheduled successfully!');
    }


    protected function generateToken(): string
    {
        try {
            $base64String = base64_encode(env('ZOOM_CLIENT_ID') . ':' . env('ZOOM_CLIENT_SECRET'));
            $accountId = env('ZOOM_ACCOUNT_ID');

            $responseToken = Http::withHeaders([
                "Content-Type"=> "application/x-www-form-urlencoded",
                "Authorization"=> "Basic {$base64String}"
            ])->post("https://zoom.us/oauth/token?grant_type=account_credentials&account_id={$accountId}");

            return $responseToken->json()['access_token'];

        } catch (\Throwable $th) {
            throw $th;
        }
    }
} 