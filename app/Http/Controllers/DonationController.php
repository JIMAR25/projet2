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
        $donation->type = $request->input('type');
        $donation->methode = $request->input('methode');
        if ($request->input('methode') == 'lui-meme') {
            $donation->prix_livraison = 0;
        } elseif ($request->input('methode') == 'organisation') {
            $donation->prix_livraison = ($request->input('livraison') === 'express') ? 10 : 5;
        } 
    
        $donation->save();
        // Stocke l'objet Donation dans la session
        $request->session()->put('donation', $donation);
    
        // Redirige l'utilisateur vers la page appropriée en fonction de la méthode de donation sélectionnée
        if ($request->input('type') == 'argent') {
            return redirect()->route('paiement.create');
        } elseif ($request->input('methode') == 'virement') {
            return redirect()->route('paiement.create');
        } elseif ($request->input('methode') == 'lui-meme') {
            return view('methodes.lui-meme')->with('donation', $donation);
        } elseif ($request->input('methode') == 'organisation') {
            return view('methodes.organisation')->with('donation', $donation);
        } else {
            return redirect()->back()->with('error', 'La méthode de donation sélectionnée est invalide.');
        }
    
        // Redirige l'utilisateur vers la page appropriée en fonction de la méthode de donation sélectionnée
        return redirect()->route('donations.index')->with('success', 'Donation effectuée avec succès.');
    }
    
    public function storeLivraison(Request $request)
    {
        $donation = $request->session()->get('donation');
    
        // Vérifiez si la session de donation existe et si les informations de livraison sont présentes
        if ($donation) {
            $donation->date_livraison = $request->input('date_livraison');
    
            $donation->save();
    
            // Redirigez l'utilisateur vers la page de paiement
            return redirect()->route('paiement.create');
        } else {
            // Gérez le cas où les informations de donation sont manquantes dans la session
            return redirect()->back()->with('error', 'Les informations de donation sont manquantes.');
        }
    }
    
    

public function storePayment(Request $request)
{
    $donation = $request->session()->get('donation');

    // Vérifiez si la session de donation existe et si les informations de paiement sont présentes
    if ($donation) {
        // Génère les ID de transaction et de charge automatiquement
        $transactionId = uniqid('transaction_');
        $chargeId = uniqid('charge_');

        $donation->transaction_id = $transactionId;
        $donation->charge_id = $chargeId;
        
        $donation->save();
        
        // Redirigez l'utilisateur vers la page de succès ou une autre page appropriée
        return redirect()->route('donations.index')->with('success', 'Donation effectuée avec succès.');
    } else {
        // Gérez le cas où les informations de donation sont manquantes dans la session
        return redirect()->back()->with('error', 'Les informations de donation sont manquantes.');
    }
}


}

