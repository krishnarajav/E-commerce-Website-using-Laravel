@extends('homepage')
@section('title', 'Registration')
@section('content')
<div class="blur-background"></div>
<div class="wrapper">
    <div class="form-box register">
        <h2>REGISTER</h2>
        <form action="{{route('registration.post')}}" method="POST">
                @csrf
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" placeholder="Full Name" name="name" required>
                </div>
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
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                </div>
                <button type="submit" class="btn">REGISTER</button>
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
                
                    @if(session()->has('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                </div>  
                <div class="login-register">
                    <p>Already have an account?<a href="{{route('login')}}" class="login-link">Login</a></p>
                </div>
        </form>
    </div>
</div>
@endsection