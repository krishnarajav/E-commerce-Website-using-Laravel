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

    .user-myaccount {
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

    form {
        margin: 30px 50px 0;
    }

    .detail-type {
        margin-bottom: 30px;
        text-align: left;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .user-detail {
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

    .successfulchange {
        justify-content: center;
        text-align: center;
        color: #008000;
        }

    .password-manage {
        margin-top: 40px;
    }

    .password-box {
        position: relative;
        width: 300px;
        height: 50px;
        margin: 20px;
        margin-left: auto;
        margin-right: auto;
    }

    .password-box input {
        width: 100%;
        height: 100%;
        background: #dddddd;
        border: none;
        border-radius: 40px;
        outline: none;
        font-size: 1em;
        font-weight: 500;
        color: black;
        padding: 20px 15px 20px 40px;
    }

    .password-box input::placeholder {
        color: gray;
        font-weight: 500;
    }

    .password-box .icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 2ex;
    }

    .user-btn {
        position: relative;
        top: 20px;
        background-color: #008000;
        font-size: 16px;
        font-weight: bold;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 200px;
        height: 50px;
        margin-bottom: 30px;
    }
</style>
<div class="blur-background"></div>
<div class="user-back">
    <div class="user-myaccount">
        <h2 class="heading">My Account Details</h2>
        <form method="POST" action="{{ route('myaccount.post')}}">
        @csrf
        @method('PUT')
            <div class="detail-type"><label>Name</label>
                <input type="text" class="user-detail" value="{{auth()->user()->name}}" name="name" required>
            </div>
            <div class="detail-type"><label>Display Name</label>
                <input type="text" class="user-detail" value="{{auth()->user()->displayname}}" name="displayname" required>
            </div>
            <div class="detail-type"><label>E-mail</label>
                <input type="text" class="user-detail" value="{{auth()->user()->email}}" name="email" required>
            </div>

            @if(session()->has('success'))
                <div class="successfulchange">{{session('success')}}</div>
            @endif
            
            <div class="password-manage">
                <h2 class="password-change">Password Change</h2>
                <div class="password-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Current Password" name="current_password">
                </div>
                <div class="password-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="New Password" name="new_password">
                </div>
                <div class="password-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Re-enter New Password" name="password_confirmation">
                </div>
            </div>
            <button type="submit" class="user-btn">Save Preferences</button>
        </form>
    </div>
</div>
@endsection