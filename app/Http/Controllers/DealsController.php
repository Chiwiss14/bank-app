<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DealsController extends Controller
{

    public function depositMoney(){
        return view('user.deposit_money');
    }

    function storeDeposit(Request $request){
        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->amount = $request->amount;
        $transaction->type_id = 'deposit';
        $transaction->status = 'pending'; // Default status
        $transaction->details = $request->bank_account;
        $transaction->save();

    }


}
