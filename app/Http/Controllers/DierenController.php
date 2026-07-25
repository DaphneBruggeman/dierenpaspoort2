<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class DierenController extends Controller
{
    public function index()
    {
        $animals = Animal::all();

        return view('dieren.index', compact('animals'));
    }
    public function create()
    {
        return view('dieren.create');
    }


    public function store(Request $request)
    {
        $fotoPad = null;

        if ($request->hasFile('foto')) {
            $fotoPad = $request->file('foto')
                ->store('dieren', 'public');
        }

        Animal::create([
            'naam' => $request->naam,
            'geboortedatum' => $request->geboortedatum,
            'soort' => $request->soort,
            'geslacht' => $request->geslacht,
            'kleur' => $request->kleur,
            'locatie' => $request->locatie,
            'eten' => $request->eten,
            'weetje' => $request->weetje,
            'qr_code' => uniqid(),
            'foto' => $fotoPad,
        ]);

        return redirect('/dieren');
    }
    public function show(Animal $animal)
    {
        return view('dieren.show', [
            'animal' => $animal
        ]);
    }
    public function adminIndex()
    {
        $animals = Animal::all();

        return view('admin.index', compact('animals'));
    }

    public function edit(Animal $animal)
    {
        return view('dieren.edit', compact('animal'));
    }

    public function update(Request $request, Animal $animal)
    {
        $request->validate([
            'naam' => 'required',
            'geboortedatum' => 'required|date',
            'soort' => 'required',
            'geslacht' => 'required',
            'kleur' => 'nullable',
            'locatie' => 'nullable',
            'eten' => 'nullable',
            'weetje' => 'nullable',
            'foto' => 'nullable|image',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('dieren', 'public');
            $animal->foto = $path;
        }

        $animal->naam = $request->naam;
        $animal->geboortedatum = $request->geboortedatum;
        $animal->soort = $request->soort;
        $animal->geslacht = $request->geslacht;
        $animal->kleur = $request->kleur;
        $animal->locatie = $request->locatie;
        $animal->eten = $request->eten;
        $animal->weetje = $request->weetje;

        $animal->save();

        return redirect()->route('dashboard')
            ->with('success', 'Dier succesvol aangepast.');
    }
    public function destroy(Animal $animal)
    {
        $animal->delete();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Dier succesvol verwijderd.');
    }
}


