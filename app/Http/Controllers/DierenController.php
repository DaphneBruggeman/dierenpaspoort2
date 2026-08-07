<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class DierenController extends Controller
{
    public function index()
    {
        $animals = Animal::all();

        $soorten = Animal::select('soort')
            ->distinct()
            ->orderBy('soort')
            ->pluck('soort');

        $gekozenSoort = null;

        return view('dieren.index', compact('animals', 'soorten', 'gekozenSoort'));
    }

    public function filter($soort)
    {
        $animals = Animal::where('soort', ucfirst($soort))->get();

        $soorten = Animal::select('soort')
            ->distinct()
            ->orderBy('soort')
            ->pluck('soort');

        $gekozenSoort = ucfirst($soort);
        return view('dieren.index', compact('animals', 'soorten', 'gekozenSoort'));
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
    public function show($soort, $animal)
    {
        $animal = Animal::where('slug', $animal)
            ->where('soort', ucfirst($soort))
            ->firstOrFail();

        return view('dieren.show', compact('animal'));
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


