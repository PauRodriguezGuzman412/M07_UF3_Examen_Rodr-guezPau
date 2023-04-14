<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __invoke()
    {
        return view('logAdmin');
    }


    public function index()
    {
        dd("INDEX");
    }

    public function login(Request $request, User $user){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)) {
            $token = $request->session();
            Session::put('username', $credentials['username']);
            Session::put('password', $credentials['password']);
            return view('user');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }
}
