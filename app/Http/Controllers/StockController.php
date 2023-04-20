<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
        public function index()
    {
        // Afficher la liste des stocks disponibles
    }

    public function create()
    {
        // Afficher le formulaire de création de stock
    }

    public function store(Request $request)
    {
        // Ajouter un nouveau stock
    }

    public function edit($id)
    {
        // Afficher le formulaire d'édition du stock sélectionné
    }

    public function update(Request $request, $id)
    {
        // Mettre à jour les informations du stock sélectionné
    }

    public function destroy($id)
    {
        // Supprimer le stock sélectionné
    }

}
