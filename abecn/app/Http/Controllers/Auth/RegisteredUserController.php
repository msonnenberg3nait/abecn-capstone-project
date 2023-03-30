<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

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
            'displayname' => ['required', 'string', 'min:3', 'max:30', 'unique:'.User::class.',display_name'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'birthday' => ['required', 'date'],
            'organization' => ['nullable', 'string', 'max:60'],
            'specialty' => ['nullable', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:40', 'unique:'.User::class],
            'phone' => ['nullable', 'min:10', 'max:11', 'integer', 'numeric'],
            'address' => ['nullable', 'string', 'min:3', 'max:60'],
            'address2' => ['nullable', 'string', 'min:3', 'max:60'],
            'city' => ['nullable', 'string', 'min:3', 'max:20'],
            'postal' => ['nullable', 'regex:/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/', 'max:6'],
        ]);

        $user = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'display_name' => $request->displayname,
            'password' => Hash::make($request->password),
            'dob' => $request->birthday,
            'organization' => $request->organization,
            'specialty' => $request->specialty,
            'email' => $request->email,
            'phone' => $request->phone,
            'primary_address' => $request->address,
            'secondary_address' => $request->address2,
            'city' => $request->city,
            'postal' => $request->postal,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
