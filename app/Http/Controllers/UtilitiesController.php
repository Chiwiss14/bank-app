<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilitiesController extends Controller
{
    public function purchaseAirtime()
    {
        return view('user.buy_airtime');
    }


    function storeAirtime(Request $request)
    {

        // Validate request
        $request->validate([
            'amount' => 'required|numeric',
            'phone_number' => 'required|numeric',
            'network' => 'required|string',
        ]);

        // Process payment
        // Create transaction record
        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->amount = $request->amount;
        $transaction->type = 'airtime';
        $transaction->status = 'pending'; // Default status
        $transaction->details = "$request->phone_number $request->network";
        $transaction->save();

        return redirect()->back()->with('success', 'Airtime purchase request submitted.');
    }


    public function purchaseData()
    {
        return view('user.buy_data');
    }

    public function storeData(Request $request)
    {
        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->amount = $request->amount;
        $transaction->type = 'data';
        $transaction->status = 'pending'; // Default status
        $transaction->details = "$request->phone_number $request->network";
        $transaction->save();
    }
}
