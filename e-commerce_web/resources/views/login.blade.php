@extends('homepage')
@section('title', 'Login')
@section('content') 
<div class="blur-background"></div>
<div class="wrapper">
    <div class="form-box login">
        @csrf
            <h2>LOGIN</h2>
            <form action="#" method="#" name="login">
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
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">LOGIN</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="{{route('registration')}}" class="register-link">Register</a></p>
                </div>
            </form>
    </div>
</div>
@endsection