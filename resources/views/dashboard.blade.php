<x-app-layout>
    @include('includes.sweetalerts.exito')

    <x-slot name="header">
        <div class="head">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Recientes
            </h2>
            <div class="search">
                <button type="submit" data-bs-toggle="modal" data-bs-target="#buscar">
                    <i class='bx bx-search-alt-2'></i>
                </button>
            </div>
            @include('includes.modales.busquedamodal')
            <h2 class="font-semibold  leading-tight crearpublicacion" data-bs-toggle="modal" data-bs-target="#crear">
                Crear publicacion
            </h2>
            @include('includes.modales.crearmodal')
        </div>
    </x-slot>

    <div id="home">
        @if($images == null)
            <div class="withoutimages">
                <p>No hay imagenes</p>
            </div>
        @else
            @include('includes.listadohome')
        @endif
    </div>
</x-app-layout>
