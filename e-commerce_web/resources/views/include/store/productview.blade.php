<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $product->name. ' (view-details) - Jackfruit Mania')</title>
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

        .viewproduct-container {
            display: flex;
            padding: 150px 50px 100px;
        }

        .viewproduct-images img.mainimage {
            position: relative;
            left: 50px;
            display: flex;
            width: 450px;
            height: auto;
            background: #eee;
        }

        .viewproduct-images img.miniimage {
            position: relative;
            top: 10px;
            left: 50px;
            max-width: 100px;
            height: auto;
            background: #eee;
        }

        .viewproduct-info {
            overflow: hidden;
            margin-left: 10%;
        }

        .viewproduct-info h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .viewproduct-info .viewrating {
            position: relative;
            width: 50px;
            height: 25px;
            background: #008000;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            user-select: none;
        }

        .viewproduct-info p.viewprice {
            margin-top: 10px;
            font-size: 22px;
        }

        .viewproduct-info p.viewdesc {
            margin-top: 30px;
            margin-right: 50px;
            font-size: 18px;
            text-align: justify;
        }

        .viewaction-buttons {
            display: flex;
            text-align: center;
            line-height: 32px;
            margin-top: 30px;
            font-size: 18px;
        }

        .viewaction-buttons button.submit {
            display: inline-block;
            padding: 10px;
            width: 180px;
            height: 50px;
            background-color: #008000;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
        }

        .viewaction-buttons button p {
            transition: transform ease-out .2s;
        }

        .viewaction-buttons button p:hover {
            transform: scale(1.05);
        }

        .viewratings-reviews {
            margin-top: 30px;
            user-select: none;
        }

        .viewratings-reviews h2 {
            font-size: 18px;
        }

        .viewratings-rating {
            display: flex;
            align-items: baseline;
            margin-top: 5px;
        }

        .viewratings-bigrating {
            margin-right: 5px; 
            font-size: 28px;
        }

        .viewratings-ratingnum {
            color: #333; 
        }

        .user-rating_review {
            margin-top: 20px;
        }

        .user-time {
            display: flex;
            align-items: baseline;
        }

        .viewratings-user {
            color: #111;
            margin-right: 5px;
        }

        .viewratings-time {
            font-size: 14px;
            color: #444;
        }

        .user-review {
            margin-top: 5px;
            margin-right: 50px;
        }

        .user-rating-stars {
            font-size: 22px;
            color: #ffcc00;
            letter-spacing: -2px;
            user-select: none;
            position: relative;
            bottom: 5px;    
        }
        
        .see-more {
            margin-top: 20px;
            color: #006090;
            cursor: pointer;
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
                            <a href="{{route('myaccount')}}">Account</a>
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
    
<div class="viewproduct-container">
    <div class="viewproduct-images">
        <img class="mainimage" src="{{ asset($product->image1) }}" alt="{{$product->name}}">
        <img class="miniimage" src="{{ asset($product->image1) }}" alt="{{$product->name}}" onclick="changeMainImage('{{ asset($product->image1) }}')">
        <img class="miniimage" src="{{ asset($product->image2) }}" alt="{{$product->name}}" onclick="changeMainImage('{{ asset($product->image2) }}')">
    </div>
    <div class="viewproduct-info">
        <h1 class="viewproduct-name">{{ $product->name }}</h1>
        <div class="viewrating">★{{ number_format($product->rating, 1) }}</div>
        <p class="viewprice">Price: <strong>₹{{ $product->price }}</strong></p>
        <p class="viewdesc"><strong>Description:</strong>{{$product->description}}</p>
        <div class="viewproduct-actions">
            <div class="viewaction-buttons">
                <form action="{{ route('cart') }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" class="submit"><p>Add to Cart</p></button>
                </form>
            </div>
        </div>
        <div class="viewratings-reviews">
            <h2>Ratings & Reviews</h2>
            <div class="viewratings-rating">
                <div class="viewratings-bigrating">★{{ number_format($product->rating, 1) }}</div>
                <div class="viewratings-ratingnum">(358 ratings)</div>
            </div>
            <div class="user-rating_review">
                <div class="user-time">
                    <div class="viewratings-user">Vijay M</div>
                    <div class="viewratings-time">· 2 days ago</div>
                </div>
                <div class="user-review">
                    <p>Nice product. Tastes good.</p>
                </div>
                <div class="user-rating-stars">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="star">★</span>
                    @endfor
                </div>
            </div>
            <div class="user-rating_review">
                <div class="user-time">
                    <div class="viewratings-user">Gaurav Tyagi</div>
                    <div class="viewratings-time">· 5 days ago</div>
                </div>
                <div class="user-review">
                    <p>Very well prepared, well packed and delivered on time. Really appreciate the prompt and efficient service of jackfruitmania</p>
                </div>
                <div class="user-rating-stars">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="star">★</span>
                    @endfor
                </div>
            </div>
            <div class="user-rating_review">
                <div class="user-time">
                    <div class="viewratings-user">Mohan Gowda</div>
                    <div class="viewratings-time">· 5 days ago</div>
                </div>
                <div class="user-review">
                    <p>Timely delivered and product was fresh</p>
                </div>
                <div class="user-rating-stars">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="star">★</span>
                    @endfor
                </div>
            </div>
            <div class="see-more">See More</div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function changeMainImage(newImage) {
        $('.mainimage').attr('src', newImage);
    }
</script>
</body>
</html>