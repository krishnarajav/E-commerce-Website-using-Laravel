<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Store')</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <style>
        .whiteback {
            background: #ffffff;
            position: relative;
            width: 90%;
            margin: auto 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 60px 60px;
            padding: 150px 0 100px;
        }

        .product-card {
            background-color: #eee;
            width: 240px;
            height: 360px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
            text-decoration: none;
        }
        
        .product-card:hover {
            transform: scale(1.05)
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

        .product-rating {
            position: relative;
            bottom: 20px;
            left: 190px;
            width: 45px;
            height: 22px;
            text-align: center;
            background: #0070aa;
            color: #fff;
            border-radius: 4px; 
        }

        .name-tile {
            width: 100%;
            position: relative;
            top: -10px;
            height: 110px;
            background: #fff;
        }

        .product-title {
            padding: 10px 5px;
            align-items: center;
            justify-content: center; 
            text-align: center;
            font-size: 1em;
            z-index: 1;
            border: none;
            word-wrap: break-word;
            color: #333;   
        }

        .product-price {
            align-items: center;
            justify-content: center; 
            text-align: center;
            font-size: 1em;
            font-weight: bold;
            z-index: 1;
            border: none;
            color: #333;
        }

        .product-submit {
            position: relative;
            top: 5px;
            left: 60px;
            width: 120px;
            height: 40px;
            text-align: center;
            background: #008000;
            color: #fff;
            border: none;
            font-size: 1em;
            border-radius: 4px; 
            cursor: pointer;
            font-weight: bold;
            transition: transform ease-out 0.5s; 
        }

        .product-submit:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <header>
        <a class="logo" href="{{route('homepage')}}">
            <img src="{{asset('images/logo.png')}}" alt="logo" class="img-logo">
        </a>
        <nav class="navigation">
            <a class="nav" href="{{route('homepage')}}">Home</a>
            <a class="nav" href="{{route('store')}}">Store</a>
            <a class="nav" href="{{route('cartview')}}">Cart</a>
            <a class="nav" href="{{route('about')}}">About</a>
            <a class="nav" href="{{route('contact')}}">Contact</a>
            @auth
                <div class="user-icon">
                    <img src="{{asset('images/person.svg')}}" alt="User Icon" class="person-icon">
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <a href="{{route('myaccount')}}">My Account</a>
                            <a href="{{route('addresses')}}">Addresses</a>
                            <a href="{{route('orders')}}">Orders</a>
                            <a href="{{route('logout')}}">Logout</a>
                        </div>
                        </div>
                    </div>
                </div>
            @else()
                <a class="btnLogin-popup" href="{{route('login')}}">Login</a>
            @endauth
        </nav>
    </header>

    <div class="blur-background"></div>
    <div class="whiteback">
  
        <div class="product-grid">
        
            <!-- Product 1-->
            <a class="product-card" href="{{route('productview', ['id' => 1])}}">
                <img class="product-image" src="{{asset('images/1-1.png')}}" alt="Product 1">
                <div class="product-rating">★4.2</div>
                <div class="name-tile">
                    <div class="product-title">Jackfruit Chips (500g)</div>
                    <div class="product-price">₹250.00</div>
                    <form action="{{ route('cart') }}" method="post">
                        <input type="hidden" name="product_id" value="1">
                        @csrf
                        <input type="submit" class="product-submit" value="Add To Cart">
                    </form>
                </div>
            </a>
        
            <!-- Product 2-->
            <a class="product-card" href="{{route('productview', ['id' => 2])}}">
                <img class="product-image" src="{{asset('images/2-1.png')}}" alt="Product 2">
                <div class="product-rating">★4.5</div>
                <div class="name-tile">
                    <div class="product-title">Jackfruit in BBQ Sauce (1L)</div>
                    <div class="product-price">₹300.00</div>
                    <form action="{{ route('cart') }}" method="post">
                        <input type="hidden" name="product_id" value="2">
                        @csrf
                        <input type="submit" class="product-submit" value="Add To Cart">
                    </form>
                </div>
            </a>

            <!-- Product 3-->
            <a class="product-card" href="{{route('productview', ['id' => 3])}}">
                <img class="product-image" src="{{asset('images/3-1.png')}}" alt="Product 3">
                <div class="product-rating">★4.3</div>
                <div class="name-tile">
                    <div class="product-title">Jackfruit - Taste of Tropics(1kg)</div>
                    <div class="product-price">₹250.00</div>
                    <form action="{{ route('cart') }}" method="post">
                        <input type="hidden" name="product_id" value="3">
                        @csrf
                        <input type="submit" class="product-submit" value="Add To Cart">
                    </form>
                </div>
            </a>

            <!-- Product 4--> 
            <a class="product-card" href="{{route('productview', ['id' => 4])}}">
                <img class="product-image" src="{{asset('images/4-1.png')}}" alt="Product 4">
                <div class="product-rating">★4.1</div>
                <div class="name-tile">
                    <div class="product-title">Jackfruit Crush (1L)</div>
                    <div class="product-price">₹160.00</div>
                    <form action="{{ route('cart') }}" method="post">
                        <input type="hidden" name="product_id" value="4">
                        @csrf
                        <input type="submit" class="product-submit" value="Add To Cart">
                    </form>
                </div>
            </a>

            <!-- Product 5--> 
            <a class="product-card" href="{{route('productview', ['id' => 5])}}">
                <img class="product-image" src="{{asset('images/5-1.png')}}" alt="Product 5">
                <div class="product-rating">★4.2</div>
                <div class="name-tile">
                    <div class="product-title">Jackfruit Papad (50pcs)</div>
                    <div class="product-price">₹220.00</div>
                    <form action="{{ route('cart') }}" method="post">
                        <input type="hidden" name="product_id" value="5">
                        @csrf
                        <input type="submit" class="product-submit" value="Add To Cart">
                    </form>
                </div>
            </a>

            <!-- Product 6-->
            <a class="product-card" href="{{route('productview', ['id' => 6])}}">
                <img class="product-image" src="{{asset('images/6-1.png')}}" alt="Product 6">
                <div class="product-rating">★4.0</div>
                <div class="name-tile">
                    <div class="product-title">Jackfruit Snacks (500g)</div>
                    <div class="product-price">₹250.00</div>
                    <form action="{{ route('cart') }}" method="post">
                        <input type="hidden" name="product_id" value="6">
                        @csrf
                        <input type="submit" class="product-submit" value="Add To Cart">
                    </form>
                </div>
            </a>
        
        </div>
    </div>
  
</body>
</html>