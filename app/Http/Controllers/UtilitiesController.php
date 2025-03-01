<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    }
}
