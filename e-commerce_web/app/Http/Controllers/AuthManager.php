<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Validator;

class AuthManager extends Controller
{
    function login() {
        if (Auth::check()) {
            return redirect(route('homepage'));
        }
        return view('login');
    }

    function registration() {
        if (Auth::check()) {
            return redirect(route('homepage'));
        }
        return view('registration');
    }

    function loginPost(Request $request) {
        $credentials  = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('homepage'));
        }
        return redirect(route('login'))->with('error', 'Login details are not valid.');
    }

    function registrationPost(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            $errorMessage = $validator->errors()->first();
            return redirect(route('registration'))->with('error', $errorMessage);
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->with('error', 'Registration failed, try again.');
        }
        return redirect(route('login'))->with('success', 'Registration successful. Login to access the application.');
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('homepage'));
    }
}
