<div class="modal fade" id="editar" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar publicación</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('update', ['image' => $image->id])}}">
                @csrf
                <textarea style="width: 100%; max-height:60px; border-radius:10px;" name="desription">{{$image->desription}}</textarea> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" onclick="location.href='{{route('update', ['image' => $image->id])}}'" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
      </div>
    </div>
  </div>