<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profil de {{ $user->name }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-6 bg-white rounded shadow">
        {{-- Section Projets --}}
        <section class="mb-6">
            <h3 class="text-2xl font-bold mb-4">
                Projets
                <a href="{{ route('projects.create') }}"
                   class="ml-4 px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 transition text-sm">
                   + Ajouter
                </a>
            </h3>

            @if($user->projects->count())
                <ul class="list-disc list-inside space-y-2">
                    @foreach($user->projects as $project)
                        <li>
                            <strong>{{ $project->title }}</strong><br>
                            <span class="text-gray-700">{{ $project->description }}</span>
                            @if($project->link)
                                <br><a href="{{ $project->link }}" target="_blank" class="text-blue-600 hover:underline">Lien du projet</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500">Aucun projet disponible.</p>
            @endif
        </section>

        {{-- Section Compétences --}}
        <section class="mb-6">
           <h3 class="text-2xl font-semibold mb-3">Compétences

            <a href="{{ route('skills.create') }}"
               class="ml-4 px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 transition text-sm">
               + Ajouter une compétence
            </a>

           </h3>

             @if($user->skills->count())
            <ul class="flex flex-wrap gap-3">
            @foreach($user->skills as $skill)
                <li class="bg-green-200 text-green-800 px-3 py-1 rounded-full text-sm">{{ $skill->name }}</li>
            @endforeach
            </ul>
            @else
        <p class="text-gray-500">Aucune compétence ajoutée.</p>
            @endif
</section>


        {{-- Télécharger PDF --}}
        <section>
            <a href="{{ route('pdf.generate', $user->username) }}" 
               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                📄 Télécharger PDF
            </a>
        </section>
    </div>
</x-app-layout>
