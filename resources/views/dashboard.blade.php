<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Tableau de bord
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            {{-- Message de bienvenue --}}
            <div class="bg-white shadow-sm sm:rounded-lg p-6 text-gray-900 text-lg">
                Bienvenue, {{ Auth::user()->name }}  Vous êtes connecté !
            </div>

            {{-- Statistiques --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-gray-600 text-sm">Nombre de projets</h3>
                    <p class="text-3xl font-bold text-gray-900">{{ Auth::user()->projects->count() }}</p>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-gray-600 text-sm">Nombre de compétences</h3>
                    <p class="text-3xl font-bold text-gray-900">{{ Auth::user()->skills->count() }}</p>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-gray-600 text-sm">Profil public</h3>
                    <a href="{{ route('profile.show', Auth::user()->username) }}" 
                       class="text-blue-600 hover:underline text-lg">Voir mon profil</a>
                </div>
            </div>

            {{-- Actions rapides --}}
            <div class="flex flex-wrap gap-4 mt-6">
                <a href="{{ route('projects.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
                    Ajouter un projet
                </a>

                <a href="{{ route('skills.create') }}"
                   class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded shadow">
                    Ajouter une compétence
                </a>

                <a href="{{ route('profile.edit') }}"
                   class="bg-gray-800 hover:bg-gray-900 text-white font-semibold py-2 px-4 rounded shadow">
                     Modifier mon profil
                </a>

                
            </div>
        </div>
    </div>
</x-app-layout>
