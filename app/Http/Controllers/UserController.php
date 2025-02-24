<?php

namespace App\Http\Controllers;

use App\Models\AirtimePurchase;
use App\Models\DataPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function confirmPin(){
        return view ('user.confirm_pin');
    }

    public function storePin(Request $request){
        $request->validate([
            'password' => 'required|string',
            'pin' => 'required|string|confirmed',
        ]);

        if (Hash::check($request->password, Auth::user()->password)) {
            return back()->with(['error' => 'Incorrect password']);
        }

        $user = Auth::user();
        $user->pin =  Hash::make($request->pin); // Hash the pin
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully');

    }

}


