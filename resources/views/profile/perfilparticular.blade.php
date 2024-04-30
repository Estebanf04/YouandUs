<x-app-layout>
    <x-slot name="header">
        <div class="head">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Perfil de {{$user->name.' '.$user->surname}}
            </h2>
        </div>
    </x-slot>

    @include('includes.estructuraperfil.perfil')
</x-app-layout>