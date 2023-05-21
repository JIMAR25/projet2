<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::paginate(10); // Récupérer les événements paginés

        return view('evenements.index', compact('evenements'));
    }

    public function create()
    {
        return view('evenements.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'photos' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $evenement = new Evenement();
        $evenement->title = $request->title;
        $evenement->content = $request->content;
    
        if ($request->hasFile('photos')) {
            $image = $request->file('photos');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $evenement->photos = $filename;
        }

    
        $evenement->save();
    
        return redirect()->route('evenements.index')->with('success', 'Le poste a été ajouté avec succès.');
    }

    public function like($id)
{
    $evenement = Evenement::findOrFail($id);
    
    $user = Auth::user();
    if (!$evenement->likes->contains($user)) {
        $evenement->likes()->attach($user);
    }
    
    return redirect()->back()->with('success', 'Événement aimé avec succès.');
}
    

}
