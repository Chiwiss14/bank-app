<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DealsController extends Controller
{

    public function sendMoney(){
        return view('user.send_money');
    }

    function storeTransfer(Request $request){
        // Validate request
        $request->validate([
            'amount' => 'required|numeric |min:0',
            'bank_account' => 'required|string',
            'pin' => 'required|numeric',
        ]);

        if(!Hash::check($request->pin,Auth::user()->pin )){
            return back()->with(['eror'=>'incorrect pin']);
        }

        //
        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->amount = $request->amount;
        $transaction->type_id = 1;
        $transaction->status = 'pending'; // Default status
        $transaction->details = $request->bank_account;
        $transaction->save();

        return redirect()->back()->with('success', 'Transfer request sent successfully');

    }

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
