@extends('layouts.app')

@section('content')

    <div class="min-h-screen bg-[#F5F1E8] px-4 py-8">

        <div class="mx-auto max-w-6xl">


            <div class="mb-8 flex items-center justify-between">

                <div>
                    <h1 class="text-3xl font-bold text-[#4F6F52]">
                        🐾 Dieren beheren
                    </h1>

                    <p class="mt-2 text-gray-600">
                        Beheer alle dierenpaspoorten.
                    </p>

            </div>

            </div>

            <div>
                <a
                    href="{{ route('dieren.create') }}"
                    class="rounded-full bg-[#4F6F52] px-5 py-3 font-bold text-white hover:bg-[#3B543E]"
                >
                    + Nieuw dier
                </a>
            </div>
            <br>



            <div class="overflow-hidden rounded-3xl bg-white shadow-lg">


                @forelse($animals as $animal)

                    <div class="flex flex-col gap-4 border-b p-6 sm:flex-row sm:items-center sm:justify-between">


                        <div class="flex items-center gap-4">


                            @if($animal->foto)

                                <img
                                    src="{{ asset('storage/'.$animal->foto) }}"
                                    class="h-20 w-20 rounded-2xl object-cover"
                                >

                            @else

                                <div class="flex h-20 w-20 items-center justify-center rounded-2xl bg-[#F5F1E8] text-3xl">
                                    🐾
                                </div>

                            @endif


                            <div>

                                <h2 class="text-xl font-bold text-[#4F6F52]">
                                    {{ $animal->naam }}
                                </h2>

                                <p class="text-gray-600">
                                    {{ $animal->soort }}
                                </p>

                            </div>


                        </div>



                        <div class="flex gap-3">


                            <a
                                href="{{ route('dieren.show', $animal->id) }}"
                                class="rounded-full bg-gray-100 px-4 py-2"
                            >
                                Bekijken
                            </a>

                            <a
                                href="{{ route('dieren.edit', ['animal' => $animal->id]) }}"
                                class="rounded-full bg-[#DDE8C7] px-4 py-2 text-[#4F6F52]"
                            >
                                ✏️ Bewerken
                            </a>

                            <form action="{{ route('dieren.destroy', $animal) }}"
                                  method="POST"
                                  onsubmit="return confirm('Weet je zeker dat je dit dier wilt verwijderen?');">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="rounded-full bg-[#B85C5C] px-4 py-2 text-white">
                                    Verwijderen
                                </button>

                            </form>


                        </div>


                    </div>


                @empty

                    <div class="p-8 text-center text-gray-600">
                        Er zijn nog geen dieren toegevoegd.
                    </div>

                @endforelse


            </div>


        </div>

    </div>

@endsection
