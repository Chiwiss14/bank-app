<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboardPage()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        // Fetch users from the database
        $users = User::all();
        
        return view('admin.users', compact('users'));

    }

}
