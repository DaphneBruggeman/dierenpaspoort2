@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto p-6">

        <h1 class="text-3xl font-bold mb-6">
            QR Codes
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @foreach($animals as $animal)

                <div class="bg-white rounded-xl shadow p-5 text-center">

                    <h2 class="text-xl font-bold mb-3">
                        {{ $animal->naam }}
                    </h2>

                    <div class="flex justify-center">
                        {!! QrCode::size(200)->generate(route('dieren.show', [
    'soort' => Str::slug($animal->soort),
    'animal' => $animal->slug
])) !!}
                    </div>

                    <a
                        href="{{ route('admin.qr-download', $animal) }}"
                        class="mt-4 inline-block bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800"
                    >
                        Download QR-code
                    </a>

                </div>

            @endforeach

        </div>

    </div>

@endsection

