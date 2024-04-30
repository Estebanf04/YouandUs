<x-app-layout>
    <x-slot name="header">
        <div class="head">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Resultados de la busqueda
            </h2>
            <div class="search">
                <button type="submit" data-bs-toggle="modal" data-bs-target="#buscar">
                    <i class='bx bx-search-alt-2'></i>
                </button>
            </div>
            @include('includes.modales.busquedamodal')
        </div>
        
    </x-slot>
    <div id="home">
        @if (count($users) == 0)
            <div class="notresultsearch">
                <p>No se han encontrado usuarios</p>
            </div>
        @else
        <div class="contenedorusersbusqueda">
            @foreach ($users as $user )
                <li onclick="location.href='{{route('perfilparticular', ['user' => $user->id])}}'">
                    <img src="{{route('avatar',['filename' => $user->image])}}" class="avatar">
                    <p>{{$user->name.' '.$user->surname}}</p>
                </li>
            @endforeach
        </div>
        @endif
    </div>
    
   
</x-app-layout>
