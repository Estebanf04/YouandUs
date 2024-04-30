<div class="modal fade" id="buscar" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Haz una busqueda</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('search')}}">
                @csrf
                <input type="search" name="busqueda" placeholder="¿A quien deseas encontrar?" style="width: 100%; border-radius:10px;" > 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" onclick="location.href='{{route('search')}}'" class="btn btn-primary" >Buscar</button>
        </div>
    </form>
      </div>
    </div>
  </div>