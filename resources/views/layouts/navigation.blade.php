<nav class="bg-[#4F6F52] shadow-md">

    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4">

        <!-- Logo -->
        <a href="/dashboard" class="flex items-center gap-2">

            <img
                src="{{ asset('favicon.ico') }}"
                alt="Camping de Hinde"
                class="h-12 w-auto"
            >

            <span class="text-xl font-bold text-white">
                Dierenpaspoort
            </span>

        </a>


        <!-- Desktop menu -->
        <div class="hidden items-center gap-6 md:flex">


            @auth

                <a
                    href="/dashboard"
                    class="text-white transition hover:text-[#DDE8C7]"
                >
                    Dashboard
                </a>


                <a
                    href="/dieren"
                    class="text-white transition hover:text-[#DDE8C7]"
                >
                    Dieren
                </a>


                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        class="rounded-full bg-white px-5 py-2 font-semibold text-[#4F6F52] transition hover:bg-[#F5F1E8]"
                    >
                        Uitloggen
                    </button>

                </form>


            @else

                <a
                    href="/login"
                    class="rounded-full bg-white px-5 py-2 font-semibold text-[#4F6F52]"
                >
                    Inloggen
                </a>

            @endauth


        </div>

    </div>

</nav>
