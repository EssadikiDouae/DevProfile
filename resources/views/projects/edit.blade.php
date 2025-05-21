<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Modifier le projet</h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('projects.update', $project) }}" method="POST" class="bg-white p-6 rounded-lg shadow">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block font-medium text-sm text-gray-700">Titre</label>
                <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}" required class="border rounded w-full py-2 px-3 mt-1">
                @error('title')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" required class="border rounded w-full py-2 px-3 mt-1">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Enregistrer</button>
                <a href="{{ route('projects.index') }}" class="ml-4 text-gray-600">Annuler</a>
            </div>
        </form>
    </div>
</x-app-layout>
