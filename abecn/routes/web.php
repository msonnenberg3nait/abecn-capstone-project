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

Route::get('/', function () {
    $user = User::get();

    return view('home', [
        'users' => $user
    ]);
})->name('home');

Route::middleware('auth')->group(function () {
    // Admin dashboard
    Route::get('/dashboard', [AdminController::class, 'edit'])->name('dashboard');
    Route::patch('/dashboard/{user}', [AdminController::class, 'update'])->name('group.update');

    // Admin dashboard - sponsors
    Route::get('/dashboard/sponsors', [SponsorController::class, 'create'])->name('sponsor.create');
    Route::post('/dashboard/sponsors', [SponsorController::class, 'store'])->name('sponsor.store');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

Route::view('/directors', 'directors');

Route::view('/contact', 'contact');

require __DIR__.'/auth.php';



