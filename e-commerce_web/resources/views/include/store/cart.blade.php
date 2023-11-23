<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Cart')</title>
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

        .cart-details {
            margin-top: 30px;
            margin-bottom: 30px;
            width: 100%;    
        }

        .cart-details h1 {
            text-align: center;
            margin-top: 100px;
        }

        .cart-details table {
            width: 100%;
            margin-top: 20px;
            padding-left: 150px;
            padding-right:50px; 
            font-size: 18px; 
        }

        .cart-details th, .cart-details td {
            padding: 10px;
            text-align: left;
        }

        .cart-details .product-image {
            background: #ddd;
            max-width: 60px;
            height: auto;
        }

        .update {
            display: inline-block;
            width: 150px;
            height: 40px;
            background: #585858;
            color: #fff;
            text-decoration: none;
            text-align: center;
            justify-content: center;
            position: relative;
            left: 625px;
            font-size: 16px;
            border: none;
        }

        .total {
            font-size: 20px;
            font-weight: 600;
            text-align: right;
            padding-right: 160px; 
            padding-top: 40px;
        }

        .cart-actions {
            display: flex;
            position: relative;
            margin-left: 150px;
            margin-top: 50px;
            left: 600px;
        }

        .cart-actions a{
            display: inline-block;
            width: 200px;
            height: 45px;
            background: #207f20;
            color: #fff;
            margin-right: 75px;
            text-decoration: none;
            text-align: center;
            line-height: 50px;
            font-size: 18px;
            font-weight: 600;
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

<div class="cart-details">
    <h1>Cart List</h1>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $item)
                <tr>
                    <td><img src="{{ asset($item->product->image1) }}" alt="{{ $item->product->name }}" class="product-image"></td>
                    <td>{{ $item->product->name }}</td>
                    <td>
                        <input type="number" name="items[{{ $item->id }}]" id="quantity_{{ $item->id }}" value="{{ $item->quantity }}" min="1" max="50">
                    </td>
                    <td>₹{{ $item->product->price }}</td>
                    <td>₹{{ number_format($item->quantity * $item->product->price, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Add a single form for updating all quantities -->
    <form action="{{ route('updatecart') }}" method="post" id="updateCartForm">
        @csrf
        <button type="submit" class="update">Update Quantity</button>
    </form>
    
    <p class="total">Total Amount: ₹{{ number_format($totalamount, 2) }}</p>
    <div class="cart-actions">
        <a href="{{ route('drop.items') }}" id="dropItemsLink" style="background: rgb(225, 28, 28)">Drop Items</a>
        <a href="{{route('orderdetails')}}">Proceed to Checkout</a>
    </div>
</div>

<script>
    // JavaScript to submit the form when the common update button is clicked
    document.getElementById('updateCartForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Loop through each product and update the quantity in the form data
        @foreach ($cart as $item)
            var quantity = document.getElementById('quantity_{{ $item->id }}').value;
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'items[{{ $item->id }}]';
            input.value = quantity;
            document.getElementById('updateCartForm').appendChild(input);
        @endforeach

        // Submit the form
        this.submit();
    });
</script>
    
    </div>
</body>
</html>