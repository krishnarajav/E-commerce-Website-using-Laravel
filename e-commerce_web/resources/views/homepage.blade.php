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
            <a class="nav" href="#">Home</a>
            <a class="nav" href="#">Menu</a>
            <a class="nav" href="#">Orders</a>
            <a class="nav" href="#">About</a>
            <a class="nav" href="#">Contact</a> 
            <a href="{{route('login')}}">
                <button class="btnLogin-popup">Login</button>
            </a>
        </nav>
    </header>

    <div class="container">
        <h1>Welcome to Jackfruit Mania!</h1>
        <p class="text">Jackfruit is a unique tropical fruit that has increased in popularity in recent years. It has a distinctive sweet flavor and can be used to make a wide variety of dishes. It’s also very nutritious and have several health benefits. And here we are proud to introduce our products based on jackfruit.</p>
        <button class="btnExplore-popup">Explore</button>
    </div>

    @yield('content')

    <script src="{{asset('js/script.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>