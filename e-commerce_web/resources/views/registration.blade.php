@extends('homepage')
@section('title', 'Registration')
@section('content')
<div class="blur-background"></div>
<div class="wrapper">
    <div class="form-box register">
    @csrf
        <h2>REGISTER</h2>
        <form action="#" method="#">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="person"></ion-icon>
                </span>
                <input type="text" placeholder="Full Name" required>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="text" placeholder="Email" required>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" placeholder="Password" required>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" placeholder="Confirm Password" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
            </div>
            <button type="submit" class="btn">REGISTER</button>
            <div class="login-register">
                <p>Already have an account?<a href="{{route('login')}}" class="login-link">Login</a></p>
            </div>
        </form>
    </div> 
</div>           
@endsection

