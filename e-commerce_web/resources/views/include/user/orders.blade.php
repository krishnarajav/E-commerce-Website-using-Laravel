@extends('homepage')
@section('title', 'My Account')
@section('content')
<style>
    .user-back {
        position: relative;
        background: #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        border-radius: 25px;
        width: 800px;
        height: auto;
        margin: 120px auto 50px;
        padding: 20px;
        box-sizing: border-box; 
    }

    .message-success {
        margin: 0 0 10px;
        justify-content: center;
        text-align: center;
        color: #008000;
    }

    .user-myorders {
        text-align: center;
    }

    h2.heading {
        margin-top: 20px;
        font-size: 2em;
        font-weight: 700;
        color: rgb(0, 0, 0);
        border-bottom: 2px solid #aaa;
        width: 50%;
        padding-bottom: 8px;
        margin-left: auto;
        margin-right: auto;
    }

    .order-details {
        text-align: left;
        padding: 20px 0 50px 50px;
    }
</style>

<div class="blur-background"></div>
<div class="user-back">
    <div class="message">
        @if(session()->has('success'))
            <div class="message-success">{{session('success')}}</div>
        @endif
    </div>
    <div class="user-myorders">
        <h2 class="heading">My Orders</h2>  
        <div class="order-details">
            @foreach ($orders as $order)
                <a href="#" style="text-decoration: none;"><p style="font-weight: bold; color: #333; padding-top: 30px;">Order ID: {{ $order->order_id }}</p></a>
                <p style="padding-top: 5px; color: #444;">Order Placed At: {{ $order->created_at }}</p>
            @endforeach  
        </div>
    </div>
</div>

@endsection