@extends('layouts.app')

@section('content')

    <div class="min-h-screen bg-[#F5F1E8] px-6 py-10">

        <div class="mx-auto max-w-6xl">

            <div class="mb-10 text-center">
                <h1 class="text-4xl font-bold text-[#4F6F52]">
                    Ontdek de dieren van onze boerderij!
                </h1>
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


                            <a
                                href="/dieren/{{ $animal->id }}"
                                class="mt-6 inline-block rounded-full bg-[#4F6F52] px-6 py-3 font-semibold text-white transition hover:bg-[#3B543E]"
                            >
                                Bekijk paspoort →
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
