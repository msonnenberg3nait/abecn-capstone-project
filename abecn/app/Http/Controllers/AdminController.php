<?php

namespace App\Http\Controllers;

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
        $users = User::filter(request(['search']))->paginate(20);
        return view('dashboard', ['users' => $users]);
    }

    /**
     * Update the user's group (user or admin).
     */
    public function update(Request $request, $user)
    {
        $user = User::find($user);
        $user->group_id = $request->input('group_id');
        $user->save();

        session()->flash('success', 'User\'s group successfully updated.');

        return Redirect::route('dashboard');
    }

    /**
     * Delete the user.
     */
    public function destroy(Request $request, $user)
    {
        $user = User::find($user);
        $user->delete();

        session()->flash('success', 'User successfully deleted.');

        return Redirect::route('dashboard');
    }
}
