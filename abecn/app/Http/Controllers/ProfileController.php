<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Stripe\Stripe;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $title = 'Update Profile';
        $intent = $request->user()->createSetupIntent();

        return view('profile.edit', [
            'user' => $request->user(),
            'title' => $title,
            'intent' => $intent->client_secret,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        session()->flash('success', 'Profile successfully updated.');

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function updateBillingInformation(Request $request)
    {
        $user = $request->user();
        $paymentMethod = $request->input('payment_method');

        try {
            $stripePaymentMethod = \Stripe\PaymentMethod::retrieve($paymentMethod);
            $stripePaymentMethod->attach([
                'customer' => $user->stripe_id,
            ]);
        } catch (\Stripe\Exception\CardException $e) {
            // Handle any errors from Stripe
        }

        // Update the user's billing information in the database
        $user->update([
            'line1' => $request->input('line1'),
            'line2' => $request->input('line2'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
            'postal_code' => $request->input('postal_code'),
        ]);

        return back()->with('status', 'billing-updated');
    }

}
