<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class DonationController extends Controller
{
    /**
     * Show the donation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donations.index');
    }
    public function create()
    {
        return view('paiement.create');
    }

    /**
     * Process the donation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $amount = $request->input('amount');
        $stripeToken = $request->input('stripeToken');

        Stripe::setApiKey(env('SECRET_KEY'));

        try {
            Charge::create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'source' => $stripeToken,
                'description' => 'Donation',
            ]);

            return redirect()->route('donations.index')->with('success', 'Thank you for your donation!');
        } catch (\Stripe\Exception\CardException $e) {
            return redirect('/donations.index')->withErrors(['error' => $e->getMessage()]);
        }
    }
}
