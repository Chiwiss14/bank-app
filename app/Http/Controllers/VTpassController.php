<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionType;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;




class VTpassController extends Controller

{
    public function showAirtime()
    {

        return view('user.buy_airtime');
    }

    public function showNetworkSelection()
    {

        return view('user.data_selection');
    }

    public function showElectricityForm()
    {
        return view('user.electricity');
    }

    // public function storeAirtime(Request $request)
    // {

    //     $user = auth()->user();
    //     $amount = $request->amount;

    //     if ($user->balance < $amount) {
    //         return back()->with('error', 'Insufficient balance.');
    //     }

    //     // Deduct from balance
    //     $user->balance -= $amount;
    //     $user->save();

    //     // Validate request
    //     $request->validate([
    //         'amount' => 'required|integer',
    //         'phone_number' => 'required|numeric',
    //         'network' => 'required|string',
    //         'pin' => 'required'
    //     ]);

    //     // Process payment
    //     // Create transaction record
    //     $transaction = new Transaction();
    //     $transaction->user_id = Auth::id();
    //     $transaction->amount = $request->amount;
    //     $transaction->type_id = 2;
    //     $transaction->status = 'successful'; // Default status
    //     $transaction->details = "$request->phone_number $request->network";
    //     $transaction->save();

    //     return back()->with('success', 'Airtime purchased successfully!');
    // }

    public function purchaseAirtime(Request $request)
    {
        // Validate input
        $request->validate([
            'phone_number' => 'required|numeric',
            'amount' => 'required|numeric|min:50',
            'network' => 'required',
            'pin' => 'required|numeric',
        ]);

        $user = auth()->user();
        $amount = $request->amount;

        // Check pin
        if (!Hash::check($request->pin, $user->pin)) {
            return back()->with('error', 'Incorrect Pin');
        }

        // Check account balance
        if (Auth::user()->balance < $request->amount) {
            return back()->with('error', 'Insufficient balance');
        }

        // 🛡️ CRITICAL: Check for the transaction type BEFORE proceeding
        $airtimeType = TransactionType::where('name', 'Airtime')->first();
        if (!$airtimeType) {
            // Log the error or handle it gracefully. This indicates a database setup problem.
            return back()->with('error', 'Critical Error: "Airtime" transaction type not found.');
        }

        // Generate a unique request ID
        $request_id = now()->format('YmdHis') . uniqid();

        // VTpass API URL
        $apiUrl = 'https://sandbox.vtpass.com/api/pay';

        // Prepare request payload
        $payload = [
            'request_id' => $request_id,
            'serviceID' => $request->network,
            'amount' => $request->amount,
            'phone' => $request->phone_number
        ];

        // Make API call
        $response = Http::withHeaders([
            'api-key' => config('services.vtpass.api_key'),
            'secret-key' => config('services.vtpass.secret_key'),
        ])->post($apiUrl, $payload);

        $result = $response->json();

        // Handle the response
        if (isset($result['response_description']) && $result['response_description'] == 'TRANSACTION SUCCESSFUL') {
            // Debit user ONLY after a successful API call
            $user->balance -= $amount;
            $user->save();

            // Create transaction record
            $transaction = new Transaction();
            $transaction->user_id = Auth::id();
            $transaction->amount = $request->amount;
            $transaction->type_id = $airtimeType->id;
            $transaction->status = 'successful';
            $transaction->details = "$request->phone_number $request->network";
            $transaction->save();

            return back()->with('success', 'Airtime purchased successfully.');
        } else {
            return back()->with('error', 'Transaction failed: ' . ($result['response_description'] ?? 'Unknown error'));
        }
    }

    public function selectNetwork(Request $request)
    {
        $request->validate([
            'network' => 'required'
        ]);
        $apiUrl = 'https://sandbox.vtpass.com/api/service-variations?serviceID=' . $request->network;


        $response = Http::withHeaders([
            'api-key' => env('VTPASS_API_KEY'),
            'secret-key' => env('VTPASS_SECRET_KEY'),
            'public-key' => env('VTPASS_PUBLIC_KEY'),
        ])->get($apiUrl);


        $bundles = $response->json();

        return view('user.data_bundle', [
            'bundles' => $bundles['content']['variations'] ?? [],
            'network' => $request->network
        ]);
    }


    public function buyData(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'bundle' => 'required',
            'network' => 'required',
            'pin' => 'required|numeric'
        ]);

        $user = Auth::user();

        // Check PIN first
        if (!Hash::check($request->pin, $user->pin)) {
            return back()->with('error', 'Incorrect PIN');
        }

        // Explode bundle to get amount before balance check
        [$code, $amount] = explode('/', $request->bundle);

        // Check account balance before making API call
        if ($user->balance < $amount) {
            return back()->with('error', 'Insufficient balance');
        }

        $request_id = now()->format('YmdHis') . uniqid();

        $payload = [
            'request_id' => $request_id,
            'serviceID' => $request->network,
            'variation_code' => $code, // Use the code from the bundle
            'phone' => $request->phone
        ];

        $apiUrl = 'https://sandbox.vtpass.com/api/pay';

        // Make API call
        $response = Http::withHeaders([
            'api-key' => config('services.vtpass.api_key'),
            'secret-key' => config('services.vtpass.secret_key'),
        ])->post($apiUrl, $payload);

        $result = $response->json();

        // 🛡️ Only proceed if the API call was successful
        if (isset($result['response_description']) && $result['response_description'] == 'TRANSACTION SUCCESSFUL') {
            // Debit user's balance ONLY after successful API call
            $user->balance -= $amount;
            $user->save();

            // Find the 'data' transaction type dynamically
            $dataType = TransactionType::where('name', 'Data')->first();

            if ($dataType) {
                // Create transaction record
                $transaction = new Transaction();
                $transaction->user_id = $user->id;
                $transaction->amount = $amount;
                $transaction->type_id = $dataType->id; // Use the dynamic ID
                $transaction->status = 'successful';
                $transaction->details = "$request->phone ($request->network)"; // Corrected details field
                $transaction->save();
            } else {
                // Log this error, as it's a critical database issue
                // For now, just return an error to the user
                return back()->with('error', 'Critical Error: Data transaction type not found.');
            }

            return back()->with('success', 'Data purchase successful!');
        } else {
            // Return an error and the response from the API
            return back()->with('error', 'Transaction failed: ' . ($result['response_description'] ?? 'Unknown error'));
        }
    }


    public function payElectricity(Request $request)
    {
        // Validate input
        $request->validate([
            'meter_number' => 'required',
            'meter_type' => 'required',
            'service_id' => 'required',
            'amount' => 'required|numeric|min:500',
            'phone' => 'required'
        ]);

        // Check account balance
        if (Auth::user()->balance < $request->amount) {
            return back()->with('error', 'Insufficient balance');
        }

        // Generate a unique request ID
        $request_id = now()->format('YmdHis') . uniqid();

        // VTpass API URL
        $apiUrl = 'https://sandbox.vtpass.com/api/pay';

        // Prepare request payload
        $payload = [
            'request_id' => $request_id,
            'serviceID' => $request->service_id,
            'billersCode' => $request->meter_number, // Meter number
            'variation_code' => $request->meter_type, // Prepaid/Postpaid
            'amount' => $request->amount,
            'phone' => $request->phone,
        ];

        // Make API call
        $response = Http::withHeaders([
            'api-key' => '4f1f290475847ab3580c6e898575cb8a',
            'secret-key' => 'SK_45063bba8a4bd076c3d5f52e5e7671f7297ffbd7643',
        ])->post($apiUrl, $payload);

        $result = $response->json();

        // Handle response
        if (isset($result['response_description']) && $result['response_description'] == 'TRANSACTION SUCCESSFUL') {
            // Deduct user's balance
            Auth::user()->decrement('balance', $request->amount);

            // Save transaction
            $transaction = new Transaction();
            $transaction->user_id = Auth::id();
            $transaction->amount = $request->amount;
            $transaction->type_id = 4;
            $transaction->status = 'successful';
            $transaction->details = "Electricity Bill for {$request->meter_number} ({$request->service_id})";
            $transaction->save();

            return back()->with('success', 'Electricity purchase successful!');
        } else {
            return back()->with('error', 'Transaction failed: ' . ($result['response_description'] ?? 'Unknown error'));
        }
    }
}
