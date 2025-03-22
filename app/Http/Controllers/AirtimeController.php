<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AirtimeController extends Controller
{

    // function storeAirtime(Request $request)
    // {
    //     $user = auth()->user();
    //     $amount = $request->amount;

    //   if ($user->balance < $amount) {
    //     return back()->with('error', 'Insufficient balance.');
    //   }

    //  // Deduct from balance
    //    $user->balance -= $amount;
    //     $user->save();

    //     // Validate request
    //     $request->validate([
    //         'amount' => 'required|integer',
    //         'phone_number' => 'required|numeric',
    //         'network' => 'required|string',
    //         'pin' => 'required'
    //     ]);

    //     if (!Hash::check($request->pin, Auth::user()->pin)) {
    //         return back()->with(['error' => 'incorrect pin']);
    //     }


    //     // Process payment
    //     // Create transaction record
    //     $transaction = new Transaction();
    //     $transaction->user_id = Auth::id();
    //     $transaction->amount = $request->amount;
    //     $transaction->type_id=2;
    //     $transaction->status = 'sucessful'; // Default status
    //     $transaction->details = "$request->phone_number $request->network";
    //     $transaction->save();

    //     return back()->with('success', 'Airtime purchased successfully!');

    // }
}
