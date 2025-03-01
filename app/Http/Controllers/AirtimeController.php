<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AirtimeController extends Controller
{
    public function purchaseAirtime()
    {
        return view('user.buy_airtime');
    }


    function storeAirtime(Request $request)
    {

        // Validate request
        $request->validate([
            'amount' => 'required|integer',
            'phone_number' => 'required|numeric',
            'network' => 'required|string',
            'pin' => 'required'
        ]);

        // dd('I got here');

        if (!Hash::check($request->pin, Auth::user()->pin)) {
            return back()->with(['error' => 'incorrect pin']);
        }

        // dd('I got here againnnn');

        // Process payment
        // Create transaction record
        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->amount = $request->amount;
        $transaction->type_id =2;
        $transaction->status = 'sucessful'; // Default status
        $transaction->details = "$request->phone_number $request->network";
        $transaction->save();

        return redirect()->back()->with('success', 'Airtime purchase request submitted.');
    }
}
