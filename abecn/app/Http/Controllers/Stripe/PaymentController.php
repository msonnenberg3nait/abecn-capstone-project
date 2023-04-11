<?php

namespace App\Http\Controllers\Stripe;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('stripe.payments.index', [
            'intent' => $user->createSetupIntent()
        ]);
    }

    public function store(Request $request)
    {
        $user = $request->user();

        $paymentMethod = $request->input('payment-method');

        $user->update([
            'name'          => $request->name,
            'line1'         => $request->line1,
            'line2'         => $request->line2,
            'city'          => $request->city,
            'state'         => $request->state,
            'country'       => $request->country,
            'postal_code'   => $request->postal_code,
        ]);

        $membership = Membership::where('stripe_name', $request->membership)->first();

        $user->newSubscription($membership->stripe_name, $membership->stripe_id)->create($paymentMethod);

        return redirect()->route('billing')->with('success', 'Thank you for becoming a member at ABECN!');
    }
}