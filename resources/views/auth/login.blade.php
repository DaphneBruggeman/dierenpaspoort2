<x-guest-layout>

    <div class="min-h-screen bg-[#F5F1E8] flex items-center justify-center px-4">

        <div class="w-full max-w-md rounded-3xl bg-white p-8 shadow-xl">

            <div class="mb-8 text-center">

                <h1 class="text-3xl font-bold text-[#4F6F52]">
                    Dierenpaspoort
                </h1>

                <p class="mt-2 text-gray-600">
                    Log in om de dieren te beheren
                </p>

            </div>


            <x-auth-session-status
                class="mb-4"
                :status="session('status')"
            />


            <form method="POST" action="{{ route('login') }}">

                @csrf


                <div>

                    <label class="mb-2 block font-semibold text-[#4F6F52]">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        required
                        autofocus
                        class="w-full rounded-2xl border border-gray-200 bg-[#F9F7F1] px-4 py-3 focus:border-[#4F6F52] focus:ring-[#4F6F52]"
                    >

                </div>


                <div class="mt-5">

                    <label class="mb-2 block font-semibold text-[#4F6F52]">
                        Wachtwoord
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full rounded-2xl border border-gray-200 bg-[#F9F7F1] px-4 py-3 focus:border-[#4F6F52] focus:ring-[#4F6F52]"
                    >

                </div>


                <div class="mt-5 flex items-center">

                    <input
                        type="checkbox"
                        name="remember"
                        class="rounded border-gray-300 text-[#4F6F52]"
                    >

                    <span class="ml-2 text-sm text-gray-600">
                    Ingelogd blijven
                </span>

                </div>


                <button
                    class="mt-8 w-full rounded-full bg-[#4F6F52] py-4 font-bold text-white transition hover:bg-[#3B543E]"
                >
                     Inloggen
                </button>


            </form>

        </div>

    </div>

</x-guest-layout>
