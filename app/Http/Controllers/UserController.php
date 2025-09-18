<?php

namespace App\Http\Controllers;

use App\Models\AirtimePurchase;
use App\Models\DataPurchase;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function dashboard()
    // {
    //     $user = Auth::user();
    //     return view('user_transaction', ['balance' => $user->balance]);
    // }

    public function confirmPin()
    {
        return view('user.confirm_pin');
    }

    public function historyPage(){

        $transactions = Auth::user()->transactions()->latest()->get();


        return view ('user.transaction_history' ,compact('transactions'));
    }

    public function storePin(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
            'pin' => 'required|string|confirmed',
        ]);

        if (!Hash::check($request->password, Auth::user()->password)) {
            return back()->with(['error' => 'Incorrect password']);

            // Store verification status in session
            session(['pin_verified' => true]);

            // return redirect()->route('user.buy_airtime'); // Redirect to the desired route
        }


        $user = Auth::user();
        $user->pin =  Hash::make($request->pin); // Hash the pin
        $user->save();

        return redirect()->back()->with('success', 'Pin updated successfully');
    }

    public function updateBalance($amount) {
        // $this->balance += $amount;
        $this->save();
    }

}
