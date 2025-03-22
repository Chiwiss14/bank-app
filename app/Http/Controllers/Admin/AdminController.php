<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboardPage()
    {

        return view('admin.dashboard ');
    }

    public function viewUsers()
    {
        $users = User::latest()->get(); // Get all users
        return view('admin.view_users', compact('users'));
    }

    public function viewTransactions()
    {
        $transactions = Transaction::latest()->get(); // Get all transactions
        return view('admin.all_transactions', compact('transactions'));
    }

}
