<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index()
    {
        $recettes = Recette::all();
        return view('recettes.index', compact('recettes'));
    }

    public function create()
    {
        return view('recettes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);

        Recette::create($request->all());

        return redirect()->route('recettes.index');
    }

    public function edit(Recette $recette)
    {
        return view('recettes.edit', compact('recette'));
    }

    public function update(Request $request, Recette $recette)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);

        $recette->update($request->all());

        return redirect()->route('recettes.index');
    }

    public function destroy(Recette $recette)
    {
        $recette->delete();
        return redirect()->route('recettes.index');
    }
    public function show(Recette $recette)
    {
        return view('recettes.show', compact('recette'));
    }
}
