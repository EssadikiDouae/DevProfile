<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profil de {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h2 class="text-2xl font-bold mb-4">Ajouter un projet</h2>

            <form action="{{ route('projects.store') }}" method="POST" class="mb-8">
                @csrf
                <div class="mb-2">
                    <label for="title" class="block font-semibold">Titre du projet:</label>
                    <input type="text" name="title" id="title" required
                        class="w-full border border-gray-300 rounded px-3 py-2">
                </div>

                <div class="mb-2">
                    <label for="description" class="block font-semibold">Description:</label>
                    <textarea name="description" id="description"
                        class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
                </div>

                <div class="mb-2">
                    <label for="link" class="block font-semibold">Lien (optionnel):</label>
                    <input type="url" name="link" id="link"
                        class="w-full border border-gray-300 rounded px-3 py-2">
                </div>

                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    Ajouter Projet
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
