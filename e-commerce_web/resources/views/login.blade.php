@extends('homepage')
@section('title', 'Login')
@section('content')
<div class="blur-background"></div>
<div class="wrapper">
    <div class="form-box login">
        <div class="nt-5">
            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
        <h2>LOGIN</h2>
        <form action="{{route('login.post')}}" method="POST">
            @csrf
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">LOGIN</button>
                <div class="nt-5">
                    @if($errors->any())
                        <div class="col-12">
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                            @endforeach
                        </div>
                    @endif
            
                    @if(session()->has('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                </div>
                <div class="login-register">
                    <p>Don't have an account?<a href="{{route('registration')}}" class="register-link">Register</a></p>
                </div>
        </form>
    </div>
</div>
@endsection()