@if(count($image->comments) == 0)
        <div class="notcomments">
            <p>Aun no hay comentarios</p>
        </div>
    @else
    <div class="contenedorcomentarios">
    @foreach ($image->comments as $comment )
        <div class="comentario">
            <div class="cmprinc">
                <div class="usuario">
                    <p onclick="location.href='{{route('perfilparticular', ['user' => $comment->user->id])}}'"> {{$comment->user->nickname.':'}} </p>
                </div>
                <div class="contentcomment">
                    <p>{{$comment->content}}</p>
                </div>
            </div>
            @if($comment->user_id == Auth::user()->id || $image->user_id == Auth::user()->id)
            <div class="borrarcomentario">
                <button onclick="location.href='{{route('destroyComment', ['comment' => $comment->id])}}'">
                    <i class='bx bx-trash' style="color: red"></i>
                </button>
            </div>
            
            @endif
        </div>
    @endforeach
    @endif