<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponsorUpdateRequest;
use App\Models\Sponsor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class SponsorController extends Controller
{
    /**
     * Display add new sponsor section of the dashboard.
     */
    public function create(): View
    {
        return view('add-sponsor');
    }

    /**
     * Display a list of all sponsors.
     */
    public function list(): View
    {
        $sponsors = Sponsor::all();
        return view('list-sponsor', ['sponsors' => $sponsors]);
    }

    /**
     * Create a new sponsor.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'company_name' => ['required', 'string', 'max:60'],
            'company_contact' => ['required', 'string', 'max:60'],
            'primary_address' => ['required', 'string', 'min:3', 'max:60'],
            'city' => ['required', 'string', 'min:3', 'max:40'],
            'postal' => ['required', 'regex:/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/', 'max:6'],
            'phone' => ['required', 'digits:10', 'integer', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:40'],
            'bio' => ['required', 'min:8', 'max:400']
        ]);

        Sponsor::create([
            'company_name' => $request->company_name,
            'company_contact' => $request->company_contact,
            'primary_address' => $request->primary_address,
            'city' => $request->city,
            'postal' => $request->postal,
            'phone' => $request->phone,
            'email' => $request->email,
            // Placeholder until images can actually be added.
            'img' => Str::random(10),
            'project_img' => Str::random(10),
            'bio' => $request->bio,
        ]);

        session()->flash('success', 'New sponsor successfully created.');

        return redirect('/dashboard/sponsors/add');
    }

    /**
     * Display the sponsor's details in a form.
     */
    public function edit($id): View
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('edit-sponsor', ['sponsor' => $sponsor]);
    }

    /**
     * Update the sponsor's information.
     */
    public function update(SponsorUpdateRequest $request, $id): RedirectResponse
    {
        $sponsor = Sponsor::find($id);

        if (!$sponsor) {
            abort(404);
        }

        $sponsor->fill($request->validated());

        $sponsor->save();

        session()->flash('success', 'Sponsor successfully updated.');

        return Redirect::route('sponsor.list');
    }
}
