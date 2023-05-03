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
    



public function storeDon(Request $request)
{
    $donation = new Donation();
    // Récupère les données du formulaire et les stocke dans l'objet Donation
    $donation->nom = $request->input('nom');
    $donation->montant = $request->input('montant');
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
    $donation->save();

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

    // Enregistre l'objet Donation dans la base de données
    try {
        Stripe::setApiKey('sk_test_51MlAg4D2dzVBVsLgV6HnejFU9d931M4kKYKTjLIj0WlplpPCVpi4epJbEru4uwqMfAFFpkPUYWMWor01c1XDte1N009ZrrNreL');
    
        $charge = Charge::create([
            'amount' => $request->input('montant') * 100,
            'currency' => 'EUR',
            'description' => 'Donation',
            'source' => $request->input('stripeToken'),
        ]);
    
        $donation->charge_id = $charge->id;
        $donation->transaction_id = $charge->balance_transaction;
    
        $donation->save();
    
    
    } catch (\Stripe\Exception\CardException $e) {
        $error = $e->getError()->message;
    } catch (\Stripe\Exception\RateLimitException $e) {
        $error = "Trop de requêtes vers Stripe. Veuillez réessayer plus tard.";
    } catch (\Stripe\Exception\InvalidRequestException $e) {
        $error = "Requête invalide vers Stripe. Veuillez réessayer plus tard.";
    } catch (\Stripe\Exception\AuthenticationException $e) {
        $error = "Clé API Stripe invalide. Veuillez contacter l'administrateur.";
    } catch (\Stripe\Exception\ApiConnectionException $e) {
        $error = "Connexion à l'API Stripe impossible. Veuillez réessayer plus tard.";
    } catch (\Stripe\Exception\ApiErrorException $e) {
        $error = "Erreur avec l'API Stripe. Veuillez réessayer plus tard.";
    }
    
    return redirect()->back()->with('error', $error);
    
    // Redirige l'utilisateur vers la page appropriée en fonction de la méthode de donation sélectionnée
    return redirect()->route('donations.index')->with('success', 'Donation effectuée avec succès.');

}

}

