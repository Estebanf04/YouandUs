<div class="descripcion">
    <div class="nombredeusuario">
        <p onclick="location.href='{{route('perfilparticular', ['user' => $image->user->id])}}'">{{'@'.$image->user->nickname}}</p>
        @if($image->user_id == Auth::user()->id)
        <div class="opciones">
           
            <button data-bs-toggle="modal" data-bs-target="#editar">
                <i class='bx bx-pencil' style='color:#000000'></i>
            </button>
            @include('includes.modales.editarmodal')
        
            <button data-bs-toggle="modal" data-bs-target="#denegar">
                <i class='bx bx-trash'></i>
            </button>
           @include('includes.modales.eliminarmodal')
    
        </div>
        
        @endif
    </div>
    <div class="contentdesc">
        <p>{{$image->desription}}</p>
    </div>
</div>
