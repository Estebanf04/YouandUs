<x-app-layout>
    <div id="home">
        @include('includes.sweetalerts.exito')

        <div class="publicacion">
            @include('includes.estructurapublicacion.cabecera')
            @include('includes.estructurapublicacion.imagen')
            @include('includes.estructurapublicacion.descripcion')
            @include('includes.estructuracomentarios.contenedorcomentarios')
        </div>
    </div>
</x-app-layout>