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
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function confirmPin()
    {
        return view('user.confirm_pin');
    }

    public function historyPage(){

        $transactions = Transaction::with('transactionType')->where('user_id', Auth::id())->latest()->get();
        Transaction::with('transactionType')->first();



        // $transactions = Transaction::where('user_id', Auth::id())->latest()->get();

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

            return redirect()->route('user.buy_airtime'); // Redirect to the desired route
        }


        $user = Auth::user();
        $user->pin =  Hash::make($request->pin); // Hash the pin
        $user->save();

        return redirect()->back()->with('success', 'Pin updated successfully');
    }
}
