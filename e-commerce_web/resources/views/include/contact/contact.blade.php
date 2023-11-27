<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contact - Jackfruit Mania')</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <style>
        .contact-us {
            position: relative;
            background: white;
            box-shadow: 0 0 50px rgb(0, 0, 0); 
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            top: 25px;
        }
        
        .address-card {
            width: 650px;
            height: 470px;
        }

        h2.heading {
            margin-top: 40px;
            font-size: 2em;
            font-weight: 700;
            color: rgb(0, 0, 0);
            text-align: center;
        }

        h2.heading::after {
            content: '';
            position: absolute;
            left: 50px;
            width: 550px;
            height: 2px;
            background: #aaa;
            top: 85px;
        }

        .address-type label {
            position: relative;
            font-weight: 600;
            color: rgb(0, 0, 0);
            top: 40px;
            display: flex;
            justify-content: center;
        }

        .address-detail {
            position: relative;
            font-weight: 500;
            color: rgb(0, 0, 0);
            padding: 50px 50px 0 50px;
            display: flex;
            text-align: center;
            justify-content: center;
        }

        .message-btn {
            position: relative;
            left: 225px;
            top: 30px;
            display: inline-block;
            width: 200px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            background: #008000;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            color: #ffffff;
            font-weight: 600;
            text-decoration: none;
        }

        .sent .alert.alert-sent {
            position: relative;
            top: 50px;
            text-align: center;
            color: #008000;
        }

        .message-form {
            width: 800px;
            height: 560px;
        }

        h2.heading2 {
            margin-top: 30px;
            font-size: 2em;
            font-weight: 700;
            color: rgb(0, 0, 0);
            text-align: center;
        }

        .box {
            position: relative;
            width: 300px;
            height: 50px;
            margin: 40px 50px 0; 
        }

        .box input {
            width: 100%;
            height: 100%;
            background: none;
            border: 2px solid #bbb;
            border-radius: 40px;
            outline: none;
            font-size: 1em;
            font-weight: 500;
            color: black;
            padding: 20px 15px 20px 20px;
        }

        .boxing {
            position: relative;
            width: 300px;
            height: 320px;
            bottom: 320px;
            left: 450px; 
        }

        .boxing textarea {
            width: 100%;
            height: 100%;
            background: none;
            border: 2px solid #bbb;
            border-radius: 20px;
            outline: none;
            font-size: 1em;
            font-weight: 500;
            color: black;
            padding: 15px;
        }

       .button {
            position: relative;
            left: 250px;
            bottom: 280px;
            display: inline-block;
            width: 300px;
            height: 50px;
            text-align: center;
            line-height: 40px;
            background: #008000;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            color: #ffffff;
            font-size: 1.1em;
            font-weight: 600;
            text-decoration: none;
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
    <div class="contact-us">
    @section('addressform')
        <!-- Address Card-->
        <div class="address-card">
            <h2 class="heading">CONTACT US</h2>
            <div class="address-type"><label>ADDRESS</label>
                <div class="address-detail">Jackfruit Mania, Shop 98, Kulshekar, Mangalore, Karnataka 575005</div>
            </div>
            <div class="address-type"><label>PHONE</label>
                <div class="address-detail">+919879879879</div>
            </div>
            <div class="address-type"><label>EMAIL</label>
                <div class="address-detail">jackfruitmania@gmail.com</div>
            </div>
            <a class="message-btn" href="{{route('writemessage')}}">Write a Message</a>
            <div class="sent">
                @if(session()->has('success'))
                    <div class="alert alert-sent">{{session('success')}}</div>
                @endif
            </div>
        </div>
    @show
    </div>
</body>
</html>