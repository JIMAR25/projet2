<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Donation;

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

    /**
     * Show the payment form.
     *
     * @return \Illuminate\Http\Response
     */
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
        // Créer une nouvelle donation
        $donation = new Donation();
        $donation->nom = $request->input('nom');
        $donation->email = $request->input('email');
        $donation->montant = $request->input('montant');
        $donation->adresse = $request->input('adresse');
        $donation->code_postal = $request->input('code_postal');
        $donation->ville = $request->input('ville');
        $donation->save();

        // Créer une charge avec la librairie Stripe
        Stripe::setApiKey(env('STRIPE_SECRET'));
        if (empty($stripeToken)) {
            return redirect()->route('paiement.create');
        }
        session_start();

        try {
            $charge = Charge::create([
                'amount' => $donation->montant * 100, // Le montant doit être en cents
                'currency' => 'usd',
                'source' => $request->input('stripeToken'),
                'description' => 'Donation',
            ]);
            // Stockez l'ID de la charge dans une variable de session
    $_SESSION['charge_id'] = $charge->id;

            // Enregistrer l'identifiant de la transaction dans la base de données
            $donation->transaction_id = $charge->id;
            $donation->save();

            return redirect()->route('donations.index')->with('success', 'Thank you for your donation!');
        } catch (\Stripe\Exception\CardException $e) {
            return redirect('/donations.index')->withErrors(['error' => $e->getMessage()]);
        }
    }
}
