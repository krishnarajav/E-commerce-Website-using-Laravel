<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'e-Commerce Website')</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a class="nav" href="{{route('homepage')}}">Home</a>
            <a class="nav" href="{{route('menu')}}">Menu</a>
            <a class="nav" href="{{route('orders')}}">Orders</a>
            <a class="nav" href="{{route('about')}}">About</a>
            <a class="nav" href="{{route('contact')}}">Contact</a>  
            @auth
                <a class="btnLogout" href="{{route('logout')}}">Logout</a>
            @else()
                <a class="btnLogin-popup" href="{{route('login')}}">Login</a>
            @endauth
        </nav>
    </header>

    <h1>Menu</h1>
</body>
</html>