<?php

namespace App\Http\Controllers\Stripe;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PaymentController extends Controller
{
    public function index()
    {
        
        return view('register', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }
    public function store(Request $request)
    {
        
    }

}
