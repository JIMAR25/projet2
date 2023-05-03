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
    public function storeArgent(Request $request)
    {
        // Créer une nouvelle donation
        $donation = new Donation();
        $donation->nom = $request->input('nom');
        $donation->email = $request->input('email');
        $donation->montant = $request->input('montant');
        $donation->adresse = $request->input('adresse');
        $donation->code_postal = $request->input('code_postal');
        $donation->ville = $request->input('ville');
        $donation->type = $request->input('type'); // Ajouter le type de donation
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

    // Dans le contrôleur DonationsController.php


public function createVetement()
{
    return view('vetements.create');
}

public function storeDon(Request $request)
{
    $donation = Donation::create($request->all());
    // Récupère les données du formulaire et les stocke dans l'objet Donation
    $donation->nom = $request->input('nom');
    $donation->adresse = $request->input('adresse');
    $donation->ville = $request->input('ville');
    $donation->code_postal = $request->input('code_postal');
    $donation->email = $request->input('email');
    $donation->telephone = $request->input('telephone');
    $donation->type = $request->input('type'); // Ajouter le type de donation
    $donation->methode = $request->input('methode');
    $donation->livraison = $request->input('livraison');
    $livraison = $request->input('livraison');
    $donation->prix_livraison = ($request->input('livraison') === 'express') ? 20 : 10;


    // Enregistre l'objet Donation dans la base de données
    $donation->save();

    // Redirige l'utilisateur vers la page appropriée en fonction de la méthode de donation sélectionnée
   // Redirige l'utilisateur vers la page appropriée en fonction de la méthode de donation sélectionnée
if ($request->input('type') == 'argent') {
    return redirect()->route('paiement.create')->with('donation', $donation);
} elseif ($request->input('methode') == 'virement') {
    return redirect()->route('paiement.create')->with('donation', $donation);
} elseif ($request->input('methode') == 'lui-meme') {
    return view('methodes.lui-meme')->with('donation', $donation);
} elseif ($request->input('methode') == 'organisation') {
    return view('methodes.organisation')->with('donation', $donation);
} else {
    return redirect()->back()->with('error', 'La méthode de donation sélectionnée est invalide.');
}

}
}

