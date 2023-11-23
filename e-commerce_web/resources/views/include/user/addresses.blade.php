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
        padding: 20px 20px 30px;
        box-sizing: border-box; 
    }

    .user-myaddresses {
        text-align: center;
    }

    h2.heading {
        margin-top: 20px;
        font-size: 2em;
        font-weight: 700;
        color: rgb(0, 0, 0);
        border-bottom: 2px solid #aaa;
        width: 40%;
        padding-bottom: 8px;
        margin-left: auto;
        margin-right: auto;
    }

    .address-details {
        text-align: left;
        padding: 0 50px 50px;
    }
</style>

<div class="blur-background"></div>
<div class="user-back">
    <div class="user-myaddresses">
        <h2 class="heading">My Addresses</h2>    
        <div class="address-details">
            @foreach ($orders as $address)
                <p style="padding-top: 30px;">{{ $address->name }}</p>
                <p style="padding-top: 5px;">{{ $address->phone }}</p>
                <p style="padding-top: 5px;">{{ $address->address }}</p>
                <p style="padding-top: 5px;">{{ $address->city }}, {{ $address->state }} - {{ $address->pin }}</p>
            @endforeach  
        </div>
    </div>
</div>
@endsection