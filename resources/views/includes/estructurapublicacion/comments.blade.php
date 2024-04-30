<div class="publicdetails">
    @if(count($image->comments) == 0)
    <h4 onclick="location.href='{{route('single', ['image' => $image->id])}}'"> Haz el primer comentario </h4>
    @else
    <h4 onclick="location.href='{{route('single', ['image' => $image->id])}}'"> Ver comentarios ({{count($image->comments)}})</h4>
    @endif
</div>