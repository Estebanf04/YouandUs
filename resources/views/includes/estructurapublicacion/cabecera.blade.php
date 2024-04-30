<div class="cabecera">
    <div class="usuario" onclick="location.href='{{route('perfilparticular', ['user' => $image->user->id])}}'">
        <img  src="{{route('avatar',['filename' => $image->user->image])}}" class="avatar">
        <p>{{$image->user->name.' '.$image->user->surname}}</p>
    </div>
    <div class="fecha">
        <p>{{FormatTime::LongTimeFilter($image->created_at)}}</p>
    </div>
</div>