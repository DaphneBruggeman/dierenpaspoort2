@extends('layouts.app')

@section('content')

    <h1>🐾 Dierenpaspoort</h1>

    @forelse($animals as $animal)

        <div class="card">

            @if($animal->foto)
                <img src="{{ asset('storage/' . $animal->foto) }}">
            @endif

            <h2>
                {{ $animal->naam }}
            </h2>

            <p>
                🐾 {{ $animal->soort }}
            </p>

            <p>
                {{ $animal->weetje }}
            </p>

            <a class="button" href="/dieren/{{ $animal->id }}">
                Bekijk paspoort
            </a>

        </div>

    @empty

        <div class="card">
            <p>
                Er zijn nog geen dieren toegevoegd.
            </p>
        </div>

    @endforelse

@endsection
