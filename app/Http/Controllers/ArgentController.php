<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Argent;

class ArgentController extends Controller
{
    /**
     * Affiche le formulaire de dons d'argent
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('argent.create');
    }

    /**
     * Enregistre le don d'argent dans la base de données
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'montant' => 'required|numeric'
        ]);

        $argent = new Argent();
        $argent->nom = $request->input('nom');
        $argent->email = $request->input('email');
        $argent->montant = $request->input('montant');
        $argent->save();

        return redirect()->route('donations')->with('success', 'Votre don d\'argent a bien été enregistré.');
    }
}
