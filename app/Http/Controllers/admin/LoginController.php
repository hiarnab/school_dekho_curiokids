<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function loggedIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);

        $credientials = $request->only('email','password');

        if (Auth::attempt($credientials)) {

            $request->session()->regenerate();

            return redirect()->route('dashboard')->with('success','Login Successfully');
        }
        return back()->withErrors([
            'email'=> 'Provided crediential do not match our records'
        ])->onlyInput('email');

    }
}
