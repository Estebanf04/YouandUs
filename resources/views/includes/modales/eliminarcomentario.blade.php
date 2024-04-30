
<div class="modal fade" id="eliminarcomment" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Advertencia</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Quieres eliminarlo?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" onclick="location.href='{{route('destroyComment', ['comment' => $comment->id])}}'" class="btn btn-primary">Eliminar</button>
        </div>
      </div>
    </div>
  </div>