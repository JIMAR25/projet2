<?php

namespace App\Http\Controllers;
use App\Models\Temoignage;


use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    public function index()
    {
        $temoignages = Temoignage::all();

        return view('temoignages.index', compact('temoignages'));
    }

    public function create()
    {
        return view('temoignages.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required',
            'temoignage' => 'required',
        ]);

        // Créer une nouvelle instance du modèle Testimony avec les données du formulaire
        $temoignage = new Temoignage();
        $temoignage->nom = $request->input('nom');
        $temoignage->temoignage = $request->input('temoignage');

        // Enregistrer le nouveau témoignage dans la base de données
        $temoignage->save();

        // Rediriger l'utilisateur vers la page des témoignages avec un message de succès
        return redirect()->route('temoignages.index')->with('success', 'Votre témoignage a été publié avec succès.');
    }

    public function destroy(Temoignage $temoignage)
    {
        // Supprimer le témoignage de la base de données
        $temoignage->delete();

        // Rediriger l'utilisateur vers la page des témoignages avec un message de succès
        return redirect()->route('temoignages.index')->with('success', 'Le témoignage a été supprimé avec succès.');
    }
}
