@extends('layouts.app')

@section('content')

    <div class="min-h-screen bg-[#F5F1E8] px-6 py-10">

        <div class="mx-auto max-w-4xl">

            <!-- Dierenkaart -->
            <div class="overflow-hidden rounded-3xl bg-white shadow-xl">

                @if($animal->foto)

                    <img
                        src="{{ asset('storage/' . $animal->foto)}}"
                        alt="{{ $animal->naam }}"
                        class="h-64 w-full object-cover sm:h-80"
                    >

                @else

                    <div class="flex h-96 items-center justify-center bg-[#A9C46C] text-8xl">

                    </div>

                @endif


                <div class="p-6 sm:p-8">

                    <h1 class="text-3xl font-bold text-[#4F6F52] sm:text-4xl">
                        {{ $animal->naam }}
                    </h1>
<div class="flex lg:flex-row flex-col gap-6 mt-3">

                    <div class="rounded-2xl bg-[#F5F1E8] p-6 flex flex-col w-full">

                        <h2 class="mb-4 text-2xl font-bold text-[#4F6F52]">
                            Over mij
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

                    <div class=" rounded-2xl bg-[#F5F1E8] p-6 flex flex-col w-full">

                        <h2 class="mb-3 text-2xl font-bold text-[#4F6F52]">
                            Wat eet ik?
                        </h2>

                        <p class="leading-relaxed text-gray-700">
                            {{ $animal->eten }}
                        </p>

                    </div>
</div>

                    <div class="mt-6 rounded-2xl bg-[#A9C46C]/30 p-6">

                        <h2 class="mb-3 text-2xl font-bold text-[#4F6F52]">
                            Mijn weetje
                        </h2>


                        <p class="leading-relaxed text-gray-700">
                            {{ $animal->weetje }}
                        </p>

                    </div>

                    <a
                        href="/dieren"
                        class=" max-md:w-full w-fit mt-8 inline-block rounded-full bg-[#4F6F52] px-6 py-3 font-semibold text-white transition hover:bg-[#3B543E]"
                    >
                        <span class="flex items-center gap-2 justify-center">
                            <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M169.4 297.4C156.9 309.9 156.9 330.2 169.4 342.7L361.4 534.7C373.9 547.2 394.2 547.2 406.7 534.7C419.2 522.2 419.2 501.9 406.7 489.4L237.3 320L406.6 150.6C419.1 138.1 419.1 117.8 406.6 105.3C394.1 92.8 373.8 92.8 361.3 105.3L169.3 297.3z"/></svg>
                            Alle dieren bekijken
                        </span>
                    </a>


                </div>

            </div>

        </div>

    </div>

@endsection
