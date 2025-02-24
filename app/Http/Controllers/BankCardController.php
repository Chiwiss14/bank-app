<?php

namespace App\Http\Controllers;

use App\Models\BankCard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BankCardController extends Controller
{
    public function index()
    {
        $cards = BankCard::where('user_id', Auth::id())->get();
        return view('bank_cards.index', compact('cards'));
    }

    public function create()
    {
        return view('bank_cards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'card_number' => 'required|unique:bank_cards,card_number|digits:16',
            'card_holder_name' => 'required|string|max:255',
            'expiry_date' => 'required|date_format:m/y',
            'cvv' => 'required|digits:3',
            'card_type' => 'required|in:Debit,Credit,Prepaid',
        ]);

        BankCard::create([
            'user_id' => Auth::id(),
            'card_number' => $request->card_number,
            'card_holder_name' => $request->card_holder_name,
            'expiry_date' => $request->expiry_date,
            'cvv' => $request->cvv,
            'card_type' => $request->card_type,
        ]);

        return redirect()->route('bank-cards.index')->with('success', 'Bank Card added successfully!');
    }
}

