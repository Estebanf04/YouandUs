<div class="modal fade" id="crear" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><strong>Crear publicación</strong></h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('save')}}" class="mt-6 space-y-6" enctype="multipart/form-data">
                @csrf
                <div class="input">
                    <input type="file" name="image_path">
                </div>
                <div class="input">
                    <textarea style="width: 100%; max-height:60px; border-radius:10px;" name="desription" placeholder="Añade una descripcion"></textarea>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" onclick="location.href='{{route('save')}}'" class="btn btn-primary">Crear</button>
        </div>
    </form>
      </div>
    </div>
  </div>