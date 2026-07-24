@extends('layouts.app')


@section('content')

    <div class="card">

        <h1>{{ $animal->naam }}</h1>

        @if($animal->foto)
            <img src="{{ asset('storage/' . $animal->foto) }}">
        @endif


        <h2>🐾 Over mij</h2>

        <p>
            <strong>Soort:</strong>
            {{ $animal->soort }}
        </p>

        <p>
            <strong>Geslacht:</strong>
            {{ $animal->geslacht }}
        </p>

        <p>
            <strong>Mijn weetje:</strong><br>
            {{ $animal->weetje }}
        </p>

    </div>


    <a class="button" href="/dieren">
        Alle dieren bekijken
    </a>


@endsection
