<?php

namespace App\Http\Controllers;

use App\Models\Customs;
use App\Http\Requests\StoreCustomsRequest;
use App\Http\Requests\UpdateCustomsRequest;
use Exception;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class CustomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomsRequest $request)
    {
       
    
    }

    public function step_2(StoreCustomsRequest $request)
    {
       return view('pages.test-step-3');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customs $customs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customs $customs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomsRequest $request, Customs $customs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customs $customs)
    {
        //
    }
    public function call_code(Request $request){
        $phone = $request->input('phone');
        $receiverNumber = $phone; // Replace with the recipient's phone number
        $message = 'hi testing'; // Replace with your desired message

        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $fromNumber = env('TWILIO_FROM');

        try {
            $client = new Client($sid, $token);
            $client->messages->create($receiverNumber, [
                '+84337930191', 
            [
                'from' => $fromNumber,  
                'body' => 'Mã OTP của bạn là: 123456'
            ]
            ]);

            response()->json(['message' => 'oke'], 200);
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }

    }
}
