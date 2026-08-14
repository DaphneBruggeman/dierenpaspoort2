@csrf

<div class="space-y-6">

    <div>
        <label class="mb-2 block font-semibold text-[#4F6F52]">
            Naam
        </label>

        <input
            type="text"
            name="naam"
            value="{{ old('naam', $animal->naam ?? '') }}"
            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-[#4F6F52] focus:ring-[#4F6F52]"
        >
    </div>

    <div>
        <label class="mb-2 block font-semibold text-[#4F6F52]">
            Geboortedatum
        </label>

        <input
            type="date"
            name="geboortedatum"
            value="{{ old('geboortedatum', $animal->geboortedatum ?? '') }}"
            class="w-full rounded-xl border border-gray-300 px-4 py-3"
        >
    </div>

    <div>
        <label class="mb-2 block font-semibold text-[#4F6F52]">
            Soort
        </label>

        <input
            type="text"
            name="soort"
            value="{{ old('soort', $animal->soort ?? '') }}"
            class="w-full rounded-xl border border-gray-300 px-4 py-3"
        >
    </div>

    <div>
        <label class="mb-2 block font-semibold text-[#4F6F52]">
            Geslacht
        </label>

        <input
            type="text"
            name="geslacht"
            value="{{ old('geslacht', $animal->geslacht ?? '') }}"
            class="w-full rounded-xl border border-gray-300 px-4 py-3"
        >
    </div>

    <div>
        <label class="mb-2 block font-semibold text-[#4F6F52]">
            Kleur
        </label>

        <input
            type="text"
            name="kleur"
            value="{{ old('kleur', $animal->kleur ?? '') }}"
            class="w-full rounded-xl border border-gray-300 px-4 py-3"
        >
    </div>

    <div>
        <label class="mb-2 block font-semibold text-[#4F6F52]">
            Locatie
        </label>

        <input
            type="text"
            name="locatie"
            value="{{ old('locatie', $animal->locatie ?? '') }}"
            class="w-full rounded-xl border border-gray-300 px-4 py-3"
        >
    </div>

    <div>
        <label class="mb-2 block font-semibold text-[#4F6F52]">
            Eten
        </label>

        <textarea
            name="eten"
            rows="3"
            class="w-full rounded-xl border border-gray-300 px-4 py-3"
        >{{ old('eten', $animal->eten ?? '') }}</textarea>
    </div>

    <div>
        <label class="mb-2 block font-semibold text-[#4F6F52]">
            Weetje
        </label>

        <textarea
            name="weetje"
            rows="4"
            class="w-full rounded-xl border border-gray-300 px-4 py-3"
        >{{ old('weetje', $animal->weetje ?? '') }}</textarea>
    </div>

    <div>
        <label class="mb-2 block font-semibold text-[#4F6F52]">
            Foto
        </label>

        <input
            type="file"
            name="foto"
            accept="image/*"
            class="w-full rounded-xl border border-gray-300 p-3"
        >
    </div>

    <button
        type="submit"
        class="w-full rounded-full bg-[#4F6F52] py-4 font-bold text-white transition hover:bg-[#3B543E]"
    >
        {{ isset($animal) ? 'Wijzigingen opslaan' : 'Dier opslaan' }}
    </button>

</div>
