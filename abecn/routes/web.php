<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Dashboard\BillingController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\Stripe\PaymentController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('home'); })->name('home');

// User Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin
Route::middleware(['auth', 'can:isAdmin', 'throttle:20,1'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'edit'])->name('dashboard');
    Route::patch('/dashboard/{user}', [AdminController::class, 'update'])->name('group.update');
    Route::delete('/dashboard/{user}', [AdminController::class, 'destroy'])->name('user.destroy');

    // TBD
    Route::get('/dashboard/sponsors', [SponsorController::class, 'create'])->name('sponsor.create');
    Route::post('/dashboard/sponsors', [SponsorController::class, 'store'])->name('sponsor.store');
});

Route::get('/sponsors', function () {
    $sponsor = Sponsor::get();

    return view('sponsors', [
        'sponsors' => $sponsor
    ]);
});

Route::get('sponsors/{sponsor:company_name}', function (Sponsor $sponsor) {
    return view('/sponsor', [
        'sponsor' => $sponsor
    ]);
});

Route::get('/memberdirectory', function () {
    $user = User::get();

    return view('/memberdirectory', [
        'users' => $user
    ]);
});


Route::view('/about', 'about');

Route::get('/membership', [MembershipController::class, 'index'])->name('membership');//middleware(['auth', 'verified']);

Route::get('/payment', [PaymentController::class, 'index'])->name('payments');
Route::post('/payment', [PaymentController::class, 'store'])->name('payments.store');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/billing',  [BillingController::class, 'index'])->name('billing');
});

Route::view('/committees', 'committees');

Route::view('/resources', 'resources');

Route::view('/events', 'events');

Route::view('/contact', 'contact');

require __DIR__.'/auth.php';



