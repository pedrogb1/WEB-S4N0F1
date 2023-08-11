<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;



class LoginController extends Controller
{
    public function showLoginForm()
    {

        return view('login');
    }

    public function login(Request $request)
    {
        $user = Users::where('email', $request->email)->first();

        if ($user && $user->password === $request->password) {
            Auth::login($user);
            return redirect('/home');
        } else {
            return back()->withErrors(['message' => 'Invalid credentials']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}