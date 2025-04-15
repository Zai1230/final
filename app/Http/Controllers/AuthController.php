<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');

    }
    public function showRegister()
    {
        return view('register');

    }
    public function Dashboard()
    {
        return view('dashboard');
    }
    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function Login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            filter_var($request->name, FILTER_VALIDATE_EMAIL) ? 'email' : 'name' => $request->name,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials))
        {
            return redirect()->route('Dashboard')->with('success', 'Login Successful');
        }
        else
        {
            return back()->with('fail', 'invalid credentials');
        }
    }

    public function Register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:6:|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|string'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/')->with('success', 'Registered successfully!');

    }

    //
}
