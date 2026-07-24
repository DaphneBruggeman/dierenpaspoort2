<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class DierenController extends Controller
{
    public function index()
    {
        $animals = Animal::all();

        return view('index', compact('animals'));
    }
    public function create()
    {
        return view('create');
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
        return view('show', [
            'animal' => $animal
        ]);
    }
}

