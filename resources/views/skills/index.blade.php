<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">Mes Compétences</h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        <a href="{{ route('skills.create') }}" class="mb-4 inline-block bg-green-600 text-white px-4 py-2 rounded">Ajouter une compétence</a>

        @if(session('success'))
            <div class="mb-4 p-2 bg-green-200 text-green-800 rounded">{{ session('success') }}</div>
        @endif

        <ul class="bg-white shadow rounded p-4 space-y-2">
            @forelse($skills as $skill)
                <li class="flex justify-between items-center border-b pb-2">
                    <span>{{ $skill->name }}</span>
                    <div class="space-x-2">
                        <a href="{{ route('skills.edit', $skill) }}" class="text-blue-500">Modifier</a>
                        <form action="{{ route('skills.destroy', $skill) }}" method="POST" class="inline-block" onsubmit="return confirm('Supprimer ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Supprimer</button>
                        </form>
                    </div>
                </li>
            @empty
                <li>Aucune compétence ajoutée.</li>
            @endforelse
        </ul>
    </div>
</x-app-layout>
