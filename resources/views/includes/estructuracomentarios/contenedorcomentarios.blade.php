<div class="comentarios">
    <div class="cm">
        <p>Comentarios ({{count($image->comments)}})</p>
    </div>
    <div class="crearcomentario">
        <button data-bs-toggle="modal" data-bs-target="#comentar">Crear comentario</button>
    </div>
    @include('includes.modales.comentarmodal')
    @include('includes.estructuracomentarios.listadocomentarios')
    </div>
</div>