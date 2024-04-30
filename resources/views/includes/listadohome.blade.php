@foreach ( $images as $image )
        <div class="publicacion">
            @include('includes.estructurapublicacion.cabecera')
            @include('includes.estructurapublicacion.imagen')
            @include('includes.estructurapublicacion.descripcion')
            @include('includes.estructurapublicacion.comments')
        </div>
@endforeach