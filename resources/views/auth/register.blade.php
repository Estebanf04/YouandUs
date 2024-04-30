@extends('layouts.inicio')

@section('content')

<div class="register">
    <a href="{{route('inicio')}}" class="textlogin">
        You&Us
    </a>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="content-register">
            <!-- Name -->
            <div>
                <input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" placeholder="  Nombre"/>
                <p class="erroresregistro">@error('name'){{ $message }}@enderror</p>
            </div>

            <!-- Surname -->
            <div>
                <input id="surname" class="block mt-1 w-full" type="text" name="surname" required autofocus autocomplete="surname" placeholder="  Apellido" />
                <p class="erroresregistro">@error('surname'){{ $message }}@enderror</p>
            </div>

            <!-- Surname -->
            <div>
                <input id="nickname" class="block mt-1 w-full" type="text" name="nickname" required autofocus autocomplete="nickname" placeholder="  Nombre de usuario" />
                <p class="erroresregistro">@error('nickname'){{ $message }}@enderror</p>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <input id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="email" placeholder="  Email" />
                <p class="erroresregistro">@error('email'){{ $message }}@enderror</p>
            </div>

            <!-- Password -->
            <div class="mt-4">

                <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="  Contraseña" />
                                <p class="erroresregistro">@error('password'){{ $message }}@enderror</p>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">

                <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="  Confirmar contraseña"/>
                                <p class="erroresregistro">@error('password_confirmation'){{ $message }}@enderror</p>
            </div>

            <div class="botonentrar">
                {{-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Ya tienes cuenta?') }}
                </a> --}}
                <button>
                    Crear cuenta
                </button>
            </div>
        </div>
    </form>
</div>

    @endsection

