@extends('layouts.app')
    @section('content')
    <div class="min-h-screen bg-[#F5F1E8] px-4 py-8">

        <div class="mx-auto max-w-6xl">

            <!-- Header -->
            <div class="mb-8">

                <h1 class="text-3xl font-bold text-[#4F6F52]">
                    🐾 Dashboard
                </h1>

                <p class="mt-2 text-gray-700">
                    Welkom terug, {{ auth()->user()->name }}!
                    Beheer hier de dieren van de boerderij.
                </p>

            </div>


            <!-- Actie knoppen -->
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">


                <!-- Dieren beheren -->
                <a
                    href="{{ route('admin.dieren.index') }}"
                    class="rounded-3xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-xl"
                >

                    <div class="text-4xl">
                        🐄
                    </div>

                    <h2 class="mt-4 text-xl font-bold text-[#4F6F52]">
                        Dieren bekijken
                    </h2>

                    <p class="mt-2 text-gray-600">
                        Bekijk en beheer alle dierenpaspoorten.
                    </p>

                </a>



                <!-- Nieuw dier -->
                <a
                    href="{{ route('dieren.create') }}"
                    class="rounded-3xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-xl"
                >

                    <div class="text-4xl">
                        ➕
                    </div>

                    <h2 class="mt-4 text-xl font-bold text-[#4F6F52]">
                        Nieuw dier toevoegen
                    </h2>

                    <p class="mt-2 text-gray-600">
                        Voeg een nieuw dier toe aan de boerderij.
                    </p>

                </a>



                <!-- QR codes -->
                <div
                    class="rounded-3xl bg-white p-6 shadow-lg"
                >

                    <div class="text-4xl">
                        📱
                    </div>

                    <h2 class="mt-4 text-xl font-bold text-[#4F6F52]">
                        QR-codes
                    </h2>

                    <p class="mt-2 text-gray-600">
                        Bekijk en beheer de QR-codes van dieren.
                    </p>

                </div>


            </div>


        </div>

    </div>

@endsection
