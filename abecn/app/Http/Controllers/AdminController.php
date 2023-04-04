<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
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

        return view('dashboard');
    }
}
