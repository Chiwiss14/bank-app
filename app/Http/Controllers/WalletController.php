<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WalletController extends Controller
{
    public function show() {
        $balance = Auth::user()->balance;
        return view('wallet.show', compact('balance'));
    }

    public function deposit(Request $request) {
        $request->validate([
            'amount' => 'required|numeric|min:1'
        ]);

        $user = Auth::user();
        $user->increment('balance', $request->amount); // Correct way to update balance

        return back()->with('success', 'Deposit successful!');
    }

    public function showTransferForm(){
        return view('user.transfer');
    }


    public function sendMoney(){
        return view('user.send_money');
    }
    function storeTransfer(Request $request){
        // Validate request
        $request->validate([
            'amount' => 'required|numeric |min:0',
            'recipient_email' => 'required|email|exists:users,email',
            'pin' => 'required|numeric',
        ]);

        $sender = Auth::user();
        $recipient = User::where('email', $request->recipient_email)->first();

        if ($sender->balance < $request->amount) {
            return back()->with('error', 'Insufficient balance');
        }

        // Deduct from sender
        $sender->balance -= $request->amount;
        $sender->save();

        // Credit recipient
        $recipient->balance += $request->amount;
        $recipient->save();

        if(!Hash::check($request->pin,Auth::user()->pin )){
            return back()->with(['eror'=>'incorrect pin']);
        }

         // Log transaction
         Transaction::create([
            'user_id' => $sender->id,
            'amount' => $request->amount,
            'type' => 'transfer',
            'status' => 'success',
            'details' => 'Transfer to ' . $recipient->email,
        ]);

        Transaction::create([
            'user_id' => $recipient->id,
            'amount' => $request->amount,
            'type' => 'deposit',
            'status' => 'success',
            'details' => 'Received from ' . $sender->email,
        ]);

        return back()->with('success', 'Transfer successful');
    }

    
}

