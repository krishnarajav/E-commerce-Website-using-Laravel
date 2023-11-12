<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Menu')</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 50px;
            padding-top: 400px;
            padding-bottom: 100px;
        }

        .product-card {
            background-color: #ffffff;
            width: 280px;
            height: 360px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-image {
            width: 100%;
            height: auto;
            object-fit: cover;
            position: relative;
            top: 0;
            left: 0;
            right: 0;
        }

        .name-tile {
            width: 100%;
            position: relative;
            top: -10px;
            height: 90px;
            background: #555;
        }

        .product-title {
            padding: 15px 20px;
            align-items: center;
            justify-content: center; 
            text-align: center;
            font-size: 1em;
            z-index: 1;
            border: none;
            word-wrap: break-word;
            color: #ffffff;
        }

        .product-price {
            align-items: center;
            justify-content: center; 
            text-align: center;
            font-size: 0.9em;
            font-weight: bold;
            z-index: 1;
            border: none;
            color: #ffffff;
        }

        /*.cart-button {
            top: -250px;
            display: flex;
            align-items: center;
            justify-content: center; 
            text-align: center;
            width: 200px;
            height: 40px;
            position: relative; 
            background: #008000;
            color: #ffffff;
            font-size: 0.8em;
            font-weight: bold;
            margin: auto;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .cart-button:hover {
            transform: scale(1.05);
        }
        */
    </style>
</head>

<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a class="nav" href="{{route('homepage')}}">Home</a>
            <a class="nav" href="{{route('store')}}">Store</a>
            <a class="nav" href="{{route('cart')}}">Cart</a>
            <a class="nav" href="{{route('about')}}">About</a>
            <a class="nav" href="{{route('contact')}}">Contact</a>
            @auth
                <div class="user-icon">
                    <img src="{{asset('images/person.svg')}}" alt="User Icon" class="person-icon">
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <a href="#">My Account</a>
                            <a href="#">Addresses</a>
                            <a href="#">Orders</a>
                            <a href="{{route('logout')}}">Logout</a>
                        </div>
                    </div>
                </div>
            @else()
                <a class="btnLogin-popup" href="{{route('login')}}">Login</a>
            @endauth
        </nav>
    </header>

    <div class="blur-background"></div>
    <div class="product-grid">
        <!-- Product 1 -->
        <div class="product-card">
            <img class="product-image" src="{{asset('images/1.png')}}" alt="Product 1">
            <div class="name-tile">
                <div class="product-title">Jackfruit Chips (500g)</div>
                <div class="product-price">Rs. 360</div>
            </div>
        </div>
    
        <!-- Product 2 -->
        <div class="product-card">
            <img class="product-image" src="{{asset('images/2.png')}}" alt="Product 2">
            <div class="name-tile">
                <div class="product-title">Jackfruit in BBQ Sauce (1L)</div>
                <div class="product-price">Rs. 300</div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img class="product-image" src="{{asset('images/3.jpg')}}" alt="Product 3">
            <div class="name-tile">
                <div class="product-title">Jackfruit - Taste of Tropics(1kg)</div>
                <div class="product-price">Rs. 300</div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <img class="product-image" src="{{asset('images/4.jpg')}}" alt="Product 4">
            <div class="name-tile">
                <div class="product-title">Jackfruit Crush (1L)</div>
                <div class="product-price">Rs. 160</div>
            </div>
        </div>

        <!-- Product 5 -->
        <div class="product-card">
            <img class="product-image" src="{{asset('images/5.png')}}" alt="Product 5">
            <div class="name-tile">
                <div class="product-title">Jackfruit Papad (50pcs)</div>
                <div class="product-price">Rs. 220</div>
            </div>
        </div>

        <!-- Product 6 -->
        <div class="product-card">
            <img class="product-image" src="{{asset('images/6.png')}}" alt="Product 6">
            <div class="name-tile">
                <div class="product-title">Jackfruit Snacks (500g)</div>
                <div class="product-price">Rs. 250</div>
            </div>
        </div>
    </div>
</body>
</html>