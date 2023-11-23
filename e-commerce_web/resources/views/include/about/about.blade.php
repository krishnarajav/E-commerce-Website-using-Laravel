<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'About')</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <style>
        .back {
            background: linear-gradient(to bottom, #ffffff, #ffffff, #b5ffb8);
            position: relative;
            width: 1350px;
            padding: 0 150px;
            justify-content: space-around;
            align-items: center;
            overflow: hidden;
        }

        .about-us {
            padding-top: 130px;
            color: #000;
            text-align: center;
        }

        .about {
            padding-top: 50px; 
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 20px; 
            text-align: justify;
        }

        .about-img {
            width: 100%;
            position: relative;
            left: 0;
        }

        .about-p1 {
            max-width: 520px;
            color: #333;
            font-size: 18px;
        }

        .about-p2 {
            color: #333;
            font-size: 18px;
            text-align: justify;
        }

        .foot-back {
            position: relative;
            right: 150px;
            margin-top: 30px; 
            background: #234120;
            width: 1350px;
            text-align: center;
            padding: 20px;
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
    <div class="back">
        <h1 class="about-us">ABOUT US</h1>
        <div class="about">
            <img src="{{asset('images/jackfruitmania.png')}}" alt="jackfruitmania" class="about-img">
            <div class="about-div">
                <p style="max-width: 520px; font-size: 24px; font-weight: bold; color: #333;">Welcome to Jackfruit Mania – Your Ultimate Destination for Premium Jackfruit Products!<br><br></p>
                <p class="about-p1">Jackfruit Mania, we bring the goodness of nature to your doorstep with a diverse range of high-quality jackfruit products. As a dedicated ecommerce platform, we take pride in offering a unique selection of delicious and nutritious items crafted from the finest jackfruit.
                <br><br>
                <strong>Our Story:</strong>
                Inspired by the rich heritage and incredible versatility of jackfruit, Jackfruit Mania was born out of a passion for providing healthy and tasty alternatives to consumers. We believe in the power of this tropical superfood and aim to share its wonders with the world.
                </p>
            </div>
        </div>
            
        <p class="about-p2"> <strong>What Sets Us Apart:</strong><br><br>
            
            <strong>Premium Quality:</strong> We source the freshest jackfruits from trusted growers to ensure that our products meet the highest quality standards. From jackfruit chips to gourmet jackfruit preserves, each item is crafted with care and precision.<br><br>
            
            <strong>Diverse Range:</strong> Explore our extensive collection that goes beyond the conventional. Indulge in the unique flavors and textures of jackfruit in various forms – from exotic snacks to delectable spreads.<br><br>
            
            <strong>Nutrient-Rich Goodness:</strong> Jackfruit is not just delicious; it's also packed with essential nutrients. We are committed to promoting a healthier lifestyle by offering wholesome jackfruit products that contribute to your well-being.<br><br>
            
            <strong>Sustainability:</strong> We are dedicated to eco-friendly practices. Our packaging is designed with sustainability in mind, minimizing our environmental impact and ensuring that your love for jackfruit is not only good for you but also for the planet.<br><br>
            
            <strong>Customer Satisfaction:</strong> Your satisfaction is our priority. Whether you're a jackfruit enthusiast or a curious foodie, we strive to exceed your expectations with prompt delivery, secure transactions, and responsive customer support.<br><br>
            
            Explore the world of jackfruit like never before at Jackfruit Mania. Join us on a culinary journey that celebrates the richness and diversity of this tropical gem. Indulge your taste buds, nourish your body, and embrace the joy of discovering jackfruit wonders – all with a click of a button.<br><br>
            
            <strong>Jackfruit Mania – Where Taste Meets Wholesome Goodness!</strong>
        </p>
        <div class="foot-back">
            <a styke="text-decoration: none; height: 50px;" href="{{route('homepage')}}">
                <img src="{{asset('images/logo.png')}}" alt="logo" style="height: 60px;">
            </a>
            <address style="font-style: italic; margin-top: 20px; color: #ccc;">
                Jackfruit Mania Shop 98 - 99, Kulshekar, Mangalore, Karnataka 575005<br>
                Phone: +919745354535<br>
                Email: jackfruitmania@gmail.com
            </address>
            <div style="margin-bottom: 20px;">
                <p style="margin: 30px 0 0; color: #aaa;">Follow us on:</p>
                <a href="https://www.instagram.com/" target="_blank"><img style="margin: 10px 10px; max-width: 30px; height: auto;" src="{{asset('images/instagram.svg.webp')}}" alt="Instagram"></a>
                <a href="https://www.facebook.com/" target="_blank"><img style="margin: 10px 10px; max-width: 30px; height: auto;" src="{{asset('images/facebook.png')}}" alt="Facebook"></a>
                <a href="https://twitter.com/" target="_blank"><img style="margin: 10px 10px; max-width: 30px; height: auto;" src="{{asset('images/twitter.png')}}" alt="Twitter"></a>
            </div>
            <p style="color: #888;">&copy; 2023 Jackfruit Mania. All rights reserved.</p>
        </div>
    </div>
</body>
</html>