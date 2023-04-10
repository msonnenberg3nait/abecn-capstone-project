<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => ['required', 'string', 'min:1', 'max:30'],
            'lastname' => ['required', 'string', 'min:2', 'max:30'],
            'name' => [ 'string', 'max:80'],
            'displayname' => ['required', 'string', 'min:2', 'max:30', 'unique:'.User::class.',display_name'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'birthday' => ['required', 'date'],
            'organization' => ['nullable', 'string', 'max:60'],
            'specialty' => ['nullable', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:40', 'unique:'.User::class],
            'phone' => ['nullable', 'digits:10', 'integer', 'numeric'],
            'line1' => ['nullable', 'string', 'min:3', 'max:60'],
            'line2' => ['nullable', 'string', 'min:3', 'max:60'],
            'pcity' => ['nullable', 'string', 'min:3', 'max:40'],
            'city' => ['nullable', 'string', 'min:3', 'max:40'],
            'state' => ['nullable', 'string', 'min:2', 'max:2'],
            'country' => ['nullable', 'string', 'min:2', 'max:2'],
            'postal_code' => ['nullable', 'regex:/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/', 'min:6', 'max:7'],
            'payment_method' => ['required_if:payment_option,stripe'],
            'card_holder_name' => ['required_if:payment_option,stripe', 'string', 'max:80'],
        ]);
    
        $user = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'name' => $request->name,
            'display_name' => $request->displayname,
            'password' => Hash::make($request->password),
            'dob' => $request->birthday,
            'organization' => $request->organization,
            'specialty' => $request->specialty,
            'email' => $request->email,
            'phone' => $request->phone,
            'line1' => $request->line1,
            'line2' => $request->line2,
            'pcity' => $request->pcity,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
            'remember_token' => Str::random(10),
        ]);

            $user->createAsStripeCustomer();

    
        event(new Registered($user));
    
        //Login the user
        Auth::login($user);
    
        return redirect('/membership');
    }
}