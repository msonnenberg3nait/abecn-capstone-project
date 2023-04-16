<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Dashboard\BillingController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\Stripe\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Models\Membership;
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
    $title = 'Home';
    return view('home', compact('title'));
})->name('home');

// User Profile
Route::middleware('auth')->group(function () {
    // title is set in the controller for User Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin
Route::middleware(['auth', 'can:isAdmin', 'throttle:20,1'])->group(function () {
    // Dashboard Home - List users, change group and delete user
    Route::get('/dashboard', [AdminController::class, 'edit'])->name('dashboard');
    Route::patch('/dashboard/{user}', [AdminController::class, 'update'])->name('group.update');
    Route::delete('/dashboard/{user}', [AdminController::class, 'destroy'])->name('user.destroy');

    // Dashboard Sponsors - List sponsors, edit sponsor
    Route::get('/dashboard/sponsors/', [SponsorController::class, 'list'])->name('sponsor.list');
    Route::get('/dashboard/sponsors/edit/{id}', [SponsorController::class, 'edit'])->name('sponsor.edit');
    Route::patch('/dashboard/sponsors/edit/{id}', [SponsorController::class, 'update'])->name('sponsor.update');

    // Dashboard Sponsors - Add new sponsor
    Route::get('/dashboard/sponsors/add', [SponsorController::class, 'create'])->name('sponsor.create');
    Route::post('/dashboard/sponsors/add', [SponsorController::class, 'store'])->name('sponsor.store');
});

Route::get('/sponsors', function () {
    $title = 'Sponsors';
    $sponsor = Sponsor::get();
    return view('sponsors', [
        'sponsors' => $sponsor,
        'title' => $title
    ]);
});

Route::get('sponsors/{sponsor:company_name}', function (Sponsor $sponsor) {
    $title = $sponsor['company_name'];
    return view('/sponsor', [
        'sponsor' => $sponsor,
        'title' => $title
    ]);
});

Route::get('/memberdirectory', function () {
    $title = 'Member Directory';
    $user = User::get();
    return view('/memberdirectory', [
        'users' => $user,
        'title' => $title
    ]);
});

Route::get('/about', function () {
    $title = 'About Us';
    return view('about', compact('title'));
});

Route::get('/membership', function () {
    $title = 'Membership';
    $memberships = Membership::all();
    return view('membership', [
        'memberships' => $memberships,
        'title' => $title
    ]);
});

Route::get('/payment', [PaymentController::class, 'index'])->name('payments');
Route::post('/payment', [PaymentController::class, 'store'])->name('payments.store');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/billing',  [BillingController::class, 'index'])->name('billing');
});

Route::get('/committees', function () {
    $title = 'Committees';
    return view('committees', compact('title'));
});

Route::get('/resources', function () {
    $title = 'Resources';
    return view('resources', compact('title'));
});

Route::get('/events', function () {
    $title = 'Events';
    return view('events', compact('title'));
});

Route::get('/contact', function () {
    $title = 'Contact';
    return view('contact', compact('title'));
});

require __DIR__.'/auth.php';



