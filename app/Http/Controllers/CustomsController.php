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
                'from' => $fromNumber,
                'body' => $message
            ]);

            response()->json(['message' => 'oke'], 200);
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }

    }
}
