@extends('layouts.app')

@section('content')

    <div class="min-h-screen bg-[#F5F1E8] px-6 py-10">

        <div class="mx-auto max-w-6xl">

            <div class="mb-10 text-center">
                <h1 class="text-4xl font-bold text-[#4F6F52]">
                    Ontdek de dieren van onze boerderij!
                </h1>
            </div>
            <div class="mb-8 flex flex-wrap justify-center gap-3">

                <a href="{{ route('dieren.index') }}"
                   class="rounded-full px-5 py-3 font-semibold transition
   {{ $gekozenSoort === null
        ? 'bg-[#4F6F52] text-white'
        : 'bg-gray-200 hover:bg-gray-300 text-gray-700' }}">
                    🐾 Alle dieren
                </a>

                @foreach($soorten as $categorie)

                    <a href="{{ route('dieren.filter', Str::slug($categorie)) }}"
                       class="rounded-full px-5 py-3 font-semibold transition
       {{ strtolower($gekozenSoort) === strtolower($categorie)
            ? 'bg-[#4F6F52] text-white'
            : 'bg-[#DDE8C7] text-[#4F6F52] hover:bg-[#C8D8AE]' }}">

                        @switch($categorie)
                            @case('Paard')
                            🐴
                            @break

                            @case('Geit')
                            🐐
                            @break

                            @case('Konijn')
                            🐇
                            @break

                            @default
                            🐾
                        @endswitch

                        {{ $categorie }}

                    </a>

                @endforeach

            </div>



            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

                @forelse($animals as $animal)

                    <div class="overflow-hidden rounded-3xl bg-white shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                        @if($animal->foto)

                            <img
                                src="{{ asset('storage/' . $animal->foto) }}"
                                alt="{{ $animal->naam }}"
                                class="h-64 w-full object-cover"
                            >

                        @else

                            <div class="flex h-64 items-center justify-center bg-[#A9C46C] text-6xl">
                                🐾
                            </div>

                        @endif


                        <div class="p-6">

                            <h2 class="text-2xl font-bold text-[#4F6F52]">
                                {{ $animal->naam }}
                            </h2>


                            <p class="mt-2 text-gray-600">
                                🐾 {{ $animal->soort }}
                            </p>


                            <p class="mt-4 text-gray-700">
                                {{ $animal->weetje }}
                            </p>

                            <a class="mt-6 inline-block rounded-full bg-[#4F6F52] px-6 py-3 font-semibold text-white transition hover:bg-[#3B543E]"
                                href="{{ route('dieren.show', [
    'soort' => Str::slug($animal->soort),
    'animal' => $animal->slug
]) }}">
                                Bekijk paspoort
                            </a>
                        </div>

                    </div>


                @empty

                    <div class="rounded-3xl bg-white p-8 text-center shadow-lg">

                        <p class="text-gray-700">
                            Er zijn nog geen dieren toegevoegd.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>

    </div>

@endsection
