<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
// use Paystack;
use Unicodeveloper\Paystack\Facades\Paystack as FacadesPaystack;
use Unicodeveloper\Paystack\Paystack as PaystackPaystack;
use App\Models\Transaction;
use App\Models\User;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaystackController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */

    //  C:\Users\HP\.config\herd-lite\bin
    public function redirectToGateway(Request $request)
    {
        try{
            return FacadesPaystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    // public function handleGatewayCallback()
    // {
    //     $paymentDetails = FacadesPaystack::getPaymentData();

    //     dd($paymentDetails['data']);
    //     if ($paymentDetails['data']['status'] == 'success') {
    //       //get user
    //       $user = auth()->user();

    //       //get amount
    //       $amount = $paymentDetails['data']['amount'] / 100; // Convert from kobo to naira

    //       //add amount to user wallet
    //       if ($user) {
    //         // Update wallet balance
    //         $user->balance += $amount;
    //         $user->save();

    //         // Create a deposit transaction record
    //         Transaction::create([
    //             'user_id' => $user->id,
    //             'amount' => $amount,
    //             'type' => 'deposit',
    //             'status' => 'successful',
    //             'details' => 'Wallet funding via Paystack',
    //         ]);

    //       //create deposit transaction

    //       //redirect to dashboard
    //       return redirect()->route('user.dashboard')->with('success', 'Wallet funded successfully!');}

    //     }
    // }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // Ensure response contains expected data
        if (!isset($paymentDetails['data'])) {
            return redirect()->route('dashboard')->with('error', 'Invalid payment response. Try again.');
        }

        // Check if transaction was successful
        if ($paymentDetails['data']['status'] === 'success') {
            $amount = $paymentDetails['data']['amount'] / 100;
            $reference = $paymentDetails['data']['reference'];
            // Get user
            $user = auth()->user();

            // Get amount
            $amount = $paymentDetails['data']['amount'] / 100; // Convert from kobo to naira

            // Add amount to user wallet
            if ($user) {
                // Update wallet balance
                $user->balance += $amount;
                $user->save();

                // Create a deposit transaction record
                Transaction::create([
                    'user_id' => $user->id,
                    'amount' => $amount,
                    'type' => 'deposit',
                    'status' => 'successful',
                    'details' => 'Wallet funding via Paystack',
                ]);

                // Redirect to dashboard
                return redirect()->route('user.dashboard')->with('success', 'Wallet funded successfully!');
            }

        }

        // If payment failed, return an error
        return redirect()->route('user.dashboard')->with('error', 'Payment failed. Please try again.');
    }


}

