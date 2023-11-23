<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Explore')</title>
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

        .explore {
            padding-top: 130px;
            color: #000;
            text-align: center;
        }

        .explore-heading {
            margin-top: 60px;
        }

        .product-categories {
            padding-top: 20px; 
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 20px; 
            text-align: justify;
        }

        .explore-img {
            background: linear-gradient(to bottom, #f5ffb0, #d0ffcc);
            width: 80%;
            position: relative;
            left: 0;
            transition: transform ease-out .3s;
        }

        .explore-img:hover {
            transform: scale(1.1);
        }

        .explore-p1-head {
            max-width: 520px; 
            font-size: 18px; 
            font-weight: bold; 
            color: #333;
        }

        .explore-p1 { 
            width: 800px;
            color: #333;
            font-size: 18px;
        }

        .explore-p2-head {
            margin-top: 20px; 
            margin-bottom: -10px; 
            font-size: 18px; 
            font-weight: bold; 
            color: #333;
        }

        .explore-p2 { 
            width: 100%;
            color: #333;
            font-size: 18px;
            text-align: justify;
        }

        .foot-back {
            position: relative;
            right: 150px;
            margin-top: 60px; 
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
        <h1 class="explore">Explore Our Store</h1>
        <h2 class="explore-heading">Featured Products: On Trend🔥</h2>
        <div class="product-categories">

            <a href="{{route('productview', ['id' => 1])}}">
                <img src="{{asset('images/1-2.png')}}" alt="jackfruitmania" class="explore-img">
            </a>
            <div class="explore-div">
                <p class="explore-p1-head">Jackfruit Chips<br><br></p>
                <p class="explore-p1">Crunch into the goodness of our jackfruit chips! Thinly sliced and delicately seasoned, our chips offer a unique blend of sweet and savory. Snack guilt-free with these crispy delights that capture the essence of jackfruit in every bite.
                </p>
            </div>

            <a href="{{route('productview', ['id' => 2])}}">
                <img src="{{asset('images/2-2.png')}}" alt="jackfruitmania" class="explore-img">
            </a>
            <div class="explore-div">
                <p class="explore-p1-head">Jackfruit in BBQ Sauce<br><br></p>
                <p class="explore-p1">Savor the smoky and savory goodness of our jackfruit in BBQ sauce. A delightful alternative to traditional barbecue, our jackfruit in BBQ sauce is a vegetarian delight that captures the essence of classic barbecue flavors. Perfect for sandwiches, tacos, or as a standalone dish.
                </p>
            </div>

            <a href="{{route('productview', ['id' => 5])}}">
                <img src="{{asset('images/5-2.png')}}" alt="jackfruitmania" class="explore-img">
            </a>
            <div class="explore-div">
                <p class="explore-p1-head">Jackfruit Papad<br><br></p>
                <p class="explore-p1">Crunch into the goodness of our jackfruit chips! Thinly sliced and delicately seasoned, our chips offer a unique blend of sweet and savory. Snack guilt-free with these crispy delights that capture the essence of jackfruit in every bite.
                </p>
            </div>

        </div>

        <h2 class="explore-heading">What's with Jackfruit?</h2>
        <div class="benifits">
            <div class="explore-div">
                <p class="explore-p2-head">1.Rich in Nutrients<br><br></p>
                <p class="explore-p2">Jackfruit is a nutritional powerhouse, containing essential nutrients such as vitamin C, potassium, dietary fiber, and various antioxidants. These nutrients contribute to overall health and well-being.
                </p>
            </div>

            <div class="explore-div">
                <p class="explore-p2-head">2.Digestive Health<br><br></p>
                <p class="explore-p2">The high fiber content in jackfruit promotes digestive health by aiding in regular bowel movements. It can help prevent constipation and support a healthy digestive system.
                </p>
            </div>

            <div class="explore-div">
                <p class="explore-p2-head">3.Boosts Immunity<br><br></p>
                <p class="explore-p2">The vitamin C content in jackfruit is beneficial for the immune system. It helps the body fight off infections and illnesses, supporting a strong and resilient immune system.
                </p>
            </div>

            <div class="explore-div">
                <p class="explore-p2-head">4.Regulates Blood Sugar Levels<br><br></p>
                <p class="explore-p2">Jackfruit may have a positive impact on blood sugar levels. The fiber and antioxidants in jackfruit can contribute to better blood sugar control, making it a suitable option for individuals with diabetes.
                </p>
            </div>

            <div class="explore-div">
                <p class="explore-p2-head">5.Antioxidant Benefits<br><br></p>
                <p class="explore-p2">Jackfruit is rich in antioxidants, including carotenoids and flavonoids, which help combat oxidative stress in the body. These antioxidants contribute to cell health and may reduce the risk of chronic diseases.
                </p>
            </div>

            <div class="explore-div">
                <p class="explore-p2-head">6.Energy Boost<br><br></p>
                <p class="explore-p2">The carbohydrates in jackfruit provide a natural and sustained energy boost. Whether you're looking for a pre-workout snack or a midday pick-me-up, jackfruit can be a healthy source of energy.
                </p>
            </div>
        </div>

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