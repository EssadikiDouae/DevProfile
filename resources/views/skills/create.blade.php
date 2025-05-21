<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">Ajouter une compétence</h2>
    </x-slot>

    <div class="py-6 max-w-xl mx-auto">
        <form action="{{ route('skills.store') }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf
            <div class="mb-4">
                <label for="name" class="block font-semibold">Nom de la compétence</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border px-3 py-2 rounded mt-1" required>
                @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Ajouter</button>
            <a href="{{ route('skills.index') }}" class="ml-4 text-gray-600">Annuler</a>
        </form>
    </div>
</x-app-layout>
