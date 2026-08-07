@extends('layouts.app')

@section('content')

    <div class="min-h-screen bg-[#F5F1E8] px-6 py-10">

        <div class="mx-auto max-w-4xl">

            <!-- Dierenkaart -->
            <div class="overflow-hidden rounded-3xl bg-white shadow-xl">

                @if($animal->foto)

                    <img
                        src="{{ asset('storage/' . $animal->foto) }}"
                        alt="{{ $animal->naam }}"
                        class="h-64 w-full object-cover sm:h-80"
                    >

                @else

                    <div class="flex h-96 items-center justify-center bg-[#A9C46C] text-8xl">
                        🐾
                    </div>

                @endif


                <div class="p-6 sm:p-8">

                    <h1 class="text-3xl font-bold text-[#4F6F52] sm:text-4xl">
                        {{ $animal->naam }}
                    </h1>


                    <div class="mt-8 rounded-2xl bg-[#F5F1E8] p-6">

                        <h2 class="mb-4 text-2xl font-bold text-[#4F6F52]">
                            🐾 Over mij
                        </h2>


                        <div class="space-y-3 text-gray-700">

                            <p>
                                <strong>Soort:</strong>
                                {{ $animal->soort }}
                            </p>

                            <p>
                                <strong>Leeftijd:</strong>

                                {{ \Carbon\Carbon::parse($animal->geboortedatum)->age }} jaar
                            </p>

                            <p>
                                <strong>Geslacht:</strong>
                                {{ $animal->geslacht }}
                            </p>


                        </div>

                    </div>

                    <div class="mt-6 rounded-2xl bg-[#F5F1E8] p-6">

                        <h2 class="mb-3 text-2xl font-bold text-[#4F6F52]">
                            🥕 Wat eet ik?
                        </h2>

                        <p class="leading-relaxed text-gray-700">
                            {{ $animal->eten }}
                        </p>

                    </div>

                    <div class="mt-6 rounded-2xl bg-[#A9C46C]/30 p-6">

                        <h2 class="mb-3 text-2xl font-bold text-[#4F6F52]">
                            🌱 Mijn weetje
                        </h2>


                        <p class="leading-relaxed text-gray-700">
                            {{ $animal->weetje }}
                        </p>

                    </div>

                    <a
                        href="/dieren"
                        class="mt-8 inline-block rounded-full bg-[#4F6F52] px-6 py-3 font-semibold text-white transition hover:bg-[#3B543E]"
                    >
                        ← Alle dieren bekijken
                    </a>


                </div>

            </div>

        </div>

    </div>

@endsection
