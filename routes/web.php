<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankCardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
 if (Auth::user()->role === 'admin') {
     return redirect()->route('admin.dashboard');
 } else {
     return view('user.dashboard');
 }
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboardPage'])->name('admin.dashboard');
});

Route::prefix('user')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/purchase-airtime', [UserController::class, 'purchaseAirtime'])->name('user.purchase-airtime');


});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/bank-cards', [BankCardController::class, 'index'])->name('bank-cards.index');
    Route::get('/bank-cards/create', [BankCardController::class, 'create'])->name('bank-cards.create');
    Route::post('/bank-cards', [BankCardController::class, 'store'])->name('bank-cards.store');
});


require __DIR__ . '/auth.php';
