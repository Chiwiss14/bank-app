<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UtilitiesController extends Controller
{


    public function purchaseData()
    {
        return view('user.buy_data');
    }

    public function storeData(Request $request)
    {
        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->amount = $request->amount;
        $transaction->type_id = $request->type_id;
        $transaction->status = 'sucesssful'; // Default status
        $transaction->details = "$request->phone_number $request->network";
        $transaction->save();

        {
            // Validate input
            $request->validate([
                'phone' => 'required',
                'amount' => 'required|numeric|min:50',
                'network' => 'required',
                'variation_code' => 'required', // Data bundle package
                'pin' => 'required'
            ]);

            // Check user authentication & PIN
            if (!Auth::check() || !Hash::check($request->pin, Auth::user()->pin)) {
                return back()->with(['error' => 'Incorrect PIN']);
            }

            $user = Auth::user();

            // Check account balance
            if ($user->balance < $request->amount) {
                return back()->with(['error' => 'Insufficient balance']);
            }

            // Generate request ID
            $request_id = now()->format('YmdHis') . uniqid();

            // VTpass API URL
            $apiUrl = 'https://sandbox.vtpass.com/api/pay';

            // API Credentials from .env
            $apiKey = env('VTPASS_API_KEY');
            $secretKey = env('VTPASS_SECRET_KEY');
            $publicKey = env('VTPASS_PUBLIC_KEY');

            // Set serviceID dynamically based on selected network
            $serviceID = $request->network . '-data'; // Ensures 'mtn-data', 'glo-data', etc.

            // Prepare request payload
            $payload = [
                'request_id' => $request_id,
                'serviceID' => $serviceID,
                'amount' => $request->amount,
                'phone' => $request->phone,
                'variation_code' => $request->variation_code, // Specific data plan
            ];

            // Deduct balance before API call
            $user->balance -= $request->amount;
            $user->save();

            try {
                // Send API request to VTpass
                $response = Http::withHeaders([
                    'api-key' => $apiKey,
                    'secret-key' => $secretKey,
                    'public-key' => $publicKey,
                ])->post($apiUrl, $payload);

                // Convert response to JSON
                $result = $response->json();

                // Check if transaction is successful
                if ($response->failed() || !isset($result['response_description']) || $result['response_description'] != 'TRANSACTION SUCCESSFUL') {
                    // Refund user on failure
                    $user->balance += $request->amount;
                    $user->save();
                    return back()->with('error', 'Transaction failed: ' . ($result['response_description'] ?? 'Unknown error'));
                }

                // Success response
                return back()->with('success', 'Data purchase successful!');

            } catch (\Exception $e) {
                // Refund balance on error
                $user->balance += $request->amount;
                $user->save();
                return back()->with('error', 'Transaction failed: ' . $e->getMessage());
            }
        }
    }
}
