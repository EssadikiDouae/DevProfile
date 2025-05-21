<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mes Projets
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('projects.create') }}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Ajouter un projet</a>

                @if($projects->count())
                    <ul>
                        @foreach ($projects as $project)
                            <li class="mb-2">
                                <strong>{{ $project->title }}</strong><br>
                                {{ $project->description }}<br>
                                <a href="{{ route('projects.edit', $project) }}" class="text-blue-600 underline">Modifier</a>

                                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline-block" onsubmit="return confirm('Voulez-vous vraiment supprimer ce projet ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 underline ml-2">Supprimer</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>Aucun projet trouvé.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

