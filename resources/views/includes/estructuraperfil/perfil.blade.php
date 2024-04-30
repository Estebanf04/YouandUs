<div id="home">
    <div class="contenedordatos">
        <div class="avatar">
            <img src="{{route('avatar',['filename' => $user->image])}}" class="avatar">
        </div>
        <div class="nombres">
            <h1>{{$user->name.' '.$user->surname}}</h1>
            <p>{{'@'.$user->nickname}}</p>
            @if ($user->id == Auth::user()->id)
                <button onclick="location.href='{{route('profile.edit')}}'" class="btn btn-primary">Editar perfil</button>
            @endif
        </div>
    </div>

    @if(count($user->images) == 0)
        <div class="sinimagenes">
            <p>Aun no hay publicaciones realizadas</p>
        </div>
    @else
        @foreach ( $user->images as $image )
            <div class="publicacion">
                @include('includes.estructurapublicacion.cabecera')
                @include('includes.estructurapublicacion.imagen')
                @include('includes.estructurapublicacion.descripcion')
                @include('includes.estructurapublicacion.comments')
            </div>
        @endforeach
    @endif
    </div>