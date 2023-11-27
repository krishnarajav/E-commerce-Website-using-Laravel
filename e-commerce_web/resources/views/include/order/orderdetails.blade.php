<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Checkout - Jackfruit Mania')</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <style>
        .user-back {
            position: relative;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 25px;
            width: 90%;
            height: auto;
            margin: 120px auto 50px;
            padding: 20px;
            box-sizing: border-box; 
        }

        .order-details {
            text-align: center;
        }

        h2.heading {
            margin-top: 20px;
            font-size: 2em;
            font-weight: 700;
            color: rgb(0, 0, 0);
            border-bottom: 2px solid #aaa;
            width: 30%;
            padding-bottom: 8px;
            margin-left: auto;
            margin-right: auto;
        }

        form {
            margin: 30px auto;
            width: 80%;
        }

        .detail-type {
            margin: 25px 100px;
            text-align: left;
        }

        .detail-type label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .bill-detail {
            width: 100%;
            height: 100%;
            background: none;
            border: 2px solid #aaa;
            border-radius: 40px;
            outline: none;
            font-size: 1em;
            font-weight: 500;
            color: black;
            padding: 15px;
        }

        .box {
            margin: 100px auto;
            width: 100%; 
            padding: 20px 30px;
            border: 2px solid #000000;
            box-sizing: border-box; 
        }

        .box table {
            width: 100%;
            margin-top: 20px;
            font-size: 18px;
        }

        .box th, .box td {
            padding: 10px; 
            text-align: left;
        }

        .box th:nth-child(2),
        .box td:nth-child(2),
        .box th:nth-child(3),
        .box td:nth-child(3) {
            text-align: center;
        }

        .payment-method {
            text-align: left;
            margin-top: 20px;
            margin-right: auto;
            margin-left: 0;
            padding-left: 20px;
            font-size: 16px;
        }

        .payment-method label {
            display: flex;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .order-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 180px;
            height: 55px;
            background-color: #ff8000;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            margin: 30px auto 15px; 
        }

        .order-btn p {
            transition: transform ease-in-out 0.3s;
        }

        .order-btn p:hover {
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
                            <a href="{{route('myaccount')}}">Account</a>
                            <a href="{{route('addresses')}}">Addresses</a>
                            <a href="{{route('orders')}}">Orders</a>
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
    <div class="user-back">
        <div class="order-details">
            <h2 class="heading">Billing Details</h2>
            <form action="{{ route('placeorder') }}" method="post" class="billing-details" id="BillingForm">
            @csrf
                <div class="detail-type"><label>Full Name</label>
                    <input type="text" class="bill-detail" name="name" required>
                </div>
                <div class="detail-type"><label>Phone Number</label>
                    <input type="text" class="bill-detail" name="phone" required>
                </div>
                <div class="detail-type"><label>E-mail</label>
                    <input type="text" class="bill-detail" name="email" required>
                </div>
                <div class="detail-type"><label>House No., Building Name, Area, Town/City</label>
                    <input type="text" class="bill-detail" name="address" required>
                </div>
                <div class="detail-type"><label>District</label>
                    <input type="text" class="bill-detail" name="city" required>
                </div>
                <div class="detail-type"><label>State</label>
                    <input type="text" class="bill-detail" name="state" required>
                </div>
                <div class="detail-type"><label>Post Code/ZIP</label>
                    <input type="text" class="bill-detail" name="pin" required>
                </div>
            
                <div class="box">
                    <h2 class="heading">Order Summary</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $item)
                                <tr>
                                    <td>{{ $item->product_name }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>₹{{ number_format($item->quantity * $item->product->price, 2) }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th style="font-size: 20px;">Shipping Fee:</th>
                                <td colspan="2" style="position: absolute; right: 245px;">₹{{ number_format($shippingFee,2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><hr></td>
                            </tr>
                            <tr>
                                <th style="font-size: 22px;">Total Amount:</th>
                                <td colspan="2" style="position: absolute; right: 245px; font-size:22px;"><strong>₹{{ number_format($totalamount + $shippingFee,2) }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="payment-method">
                        <p style="padding-bottom: 10px; font-size: 18px;"><strong>Payment Method:</strong></p>
                        <label><input type="radio" name="payment_method" value="online" required> Credit Card/Debit Card/NetBanking/UPI/Wallets</label>
                        <label><input type="radio" name="payment_method" value="cod" required> Cash On Delivery</label>
                    </div>
                    <button type="submit" id="submitButton" class="order-btn"><p>PLACE ORDER</p></button>
                </div>          
            
            </form>
    </div>
</div>

</body>
</html>