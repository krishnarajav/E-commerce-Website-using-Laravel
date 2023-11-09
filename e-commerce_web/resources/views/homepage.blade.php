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

    @if(in_array(Route::currentRouteName(), ['login', 'registration']))
        @yield('content')

    @else
        <div class="container">
            <h1>Welcome to Jackfruit Mania!</h1>
            <p class="text">Jackfruit is a unique tropical fruit that has increased in popularity in recent years. It has a distinctive sweet flavor and can be used to make a wide variety of dishes. It’s also very nutritious and have several health benefits.  And here we are proud to introduce our products based on jackfruit.Whether you're looking for a meat alternative or a flavorful addition to your meals, our jackfruit products are the perfect solution. Embrace the tropical goodness and explore our innovative jackfruit-based treats today!
            </p>
            <a href="{{route('explore')}}"><button class="btnExplore-popup">Explore</button></a>
        </div>
    @endif
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>