<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AirtimeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankCardController;
use App\Http\Controllers\DealsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilitiesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\VTpassController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (Auth::user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } else {
        return view('user.dashboard[');
    }
})->middleware(['auth', 'verified'])->name('dashboard');



Route::post('/paystack/pay', [PaystackController::class, 'redirectToGateway'])->name('paystack.pay');
Route::get('/paystack/callback', [PaystackController::class, 'handleGatewayCallback'])->name('paystack.callback');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboardPage'])->name('admin.dashboard');
    Route::get('/view-users', [AdminController::class, 'viewUsers'])->name('admin.users');
    Route::get('/admin/transactins', [AdminController::class, 'viewTransactions'])->name('admin.transactions');


});

Route::prefix('user')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

    Route::get('/purchase-airtime', [VTpassController::class, 'showAirtime'])->name('user.airtime');
    Route::post('/store-airtime', [VTpassController::class, 'purchaseAirtime'])->name('airtime.store');

    // 1️⃣ Show network selection page
    Route::get('/select-network', [VTpassController::class, 'showNetworkSelection'])->name('vtpass.selectNetwork');

 // 2️⃣ Handle selection and redirect to bundle selection page
   Route::post('/select-network', [VTpassController::class, 'selectNetwork'])->name('vtpass.processNetwork');

 // 3️⃣ Show data bundles based on selected network
  Route::get('/select-bundle/{network}', [VTpassController::class, 'showBundles'])->name('vtpass.dataBundles');
   Route::post('/buy-data', [VTpassController::class, 'buyData'])->name('vtpass.buyData');

 Route::get('vtpass/electricity', [VTpassController::class, 'showElectricityForm'])->name('electricity.show');
 Route::post('/vtpass/electricity', [VTpassController::class, 'payElectricity'])->name('vtpass.electricity');


    Route::get('/purchase-data', [UtilitiesController::class, 'purchaseData'])->name('user.data');
    Route::post('/store-data', [UtilitiesController::class, 'storeData'])->name('data.store');


    Route::get('/deposit-money', [DealsController::class, 'depositMoney'])->name('user.deposit');
    Route::post('/deposit-store', [DealsController::class, 'storeDeposit'])->name('deposit.store');

    Route::get('/confirm-password', [UserController::class, 'confirmPin'])->name('user.confirm_pin');
    Route::post('/password-store', [UserController::class, 'storePin'])->name('pin.store');

    Route::get('/history', [UserController::class, 'historyPage'])->name('user.transaction_history');

    Route::get('/pay', function () {
        return view('pay'); // Loads resources/views/pay.blade.php
    })->name('pay');


    Route::get('/wallet', [WalletController::class, 'show'])->name('wallet.show');
    Route::post('/wallet/deposit', [WalletController::class, 'deposit'])->name('wallet.deposit');


    Route::get('/send-money', [walletController::class, 'sendMoney'])->name('user.send');
    Route::post('/transfer-store', [walletController::class, 'storeTransfer'])->name('transfer.store');


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

require __DIR__ . '/admin-auth.php';

