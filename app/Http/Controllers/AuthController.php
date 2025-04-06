<?php

namespace App\Http\Controllers;

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

    //
}
