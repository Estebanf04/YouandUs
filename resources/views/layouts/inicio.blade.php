<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel= icon href="{{asset('Logo.png')}}" type= "image/png" sizes="90x90"> <!-- FAVICON -->
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    <title>You&Us</title>
</head>
<body>
    <div class="header">
        <div class="youandwe">
            <h1 onclick="location.href='{{route('inicio')}}'">You&Us</h1>
            <img onclick="location.href='{{route('inicio')}}'" src="{{asset('Logo.png')}}">
        </div>
    </div>
    <div id="contenedorprinc">
        @yield('content')
    </div>
    <footer>
        <p>You&Us &copy 2024</p>
    </footer>
</body>
</html>