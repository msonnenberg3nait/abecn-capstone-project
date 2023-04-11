<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function edit(Request $request): View
    {
        // Check if the user has group_id = 1 (Admin)
        if (Auth::user()->group_id !== 1) {
            abort('403');
        }

        $users = User::paginate(20);

        return view('dashboard', ['users' => $users]);
    }

    public function update(Request $request, $user)
    {
        $user = User::find($user);
        $user->group_id = $request->input('group_id');
        $user->save();

        return Redirect::route('dashboard');
    }
}
