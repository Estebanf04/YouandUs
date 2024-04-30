@extends('layouts.inicio')

@section('content')

<div class="login">
    <a href="{{route('inicio')}}" class="textlogin">
        You&Us
    </a>
    @error('email')
            <p class="errorlogin" style="color:Red">{{$message}}</p>
        @enderror
        
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="content-login">
        <!-- Email Address -->
        <div>
            <input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="email" placeholder="  Email"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="  Contraseña"/>
        </div>

        <div class="botonentrar">
            <button>
                Entrar
            </button>
        </div>
    </div>
    </form>
</div>

@endsection
