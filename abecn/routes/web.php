<?php

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [AdminController::class, 'edit'])->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
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

Route::get('/register', [PaymentController::class, 'index'])->name('register');
Route::post('/register', [PaymentController::class, 'store'])->name('register');

Route::view('/committees', 'committees');

Route::view('/resources', 'resources');

Route::view('/events', 'events');

Route::view('/memberdirectory', 'memberdirectory');

Route::view('/contact', 'contact');

require __DIR__.'/auth.php';



