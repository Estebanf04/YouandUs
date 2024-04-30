@extends('layouts.inicio')

@section('content')
    <div class="inicio">
        <div class="imagenprincipal">
            <img src="../resources/img/pruebabanner.jpg">
        </div>
        <div class="logodc">
            <img src="{{asset('Logo.png')}}">
        </div>
        <div class="seccioningreso">
            <div class="mensaje">
                <h1>Donde TODOS <br> <span class="resaltado">nos encontramos!</span></h1>
            </div>
            <div class="linea"><hr></div>
            <div class="ingresar">
                <button class="botoniniciar" onclick="location.href='{{route('login')}}'">Ingresar</button>
                <button class="botonregistrar" onclick="location.href='{{route('register')}}'">Crear cuenta</button>
            </div>
        </div>
    </div>
@endsection