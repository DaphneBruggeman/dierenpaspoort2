@extends('layouts.app')

@section('content')

    <div class="min-h-screen bg-[#F5F1E8] px-4 py-8">

        <div class="mx-auto max-w-2xl rounded-3xl bg-white p-6 shadow-xl">

            <h1 class="mb-8 text-center text-3xl font-bold text-[#4F6F52]">
                Nieuw dierenpaspoort
            </h1>

            <form method="POST" action="/dieren" enctype="multipart/form-data">

                @include('dieren.form')

            </form>

        </div>

    </div>

@endsection
