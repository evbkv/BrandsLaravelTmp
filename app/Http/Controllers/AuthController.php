<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Auth;
use Hash;

class AuthController extends Controller
{
    
    public function login(Request $request) {
        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('login', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/cabinet/news');
        } else {
            Session::flash('error', 'Sisselogimine ebaõnnestus!');
            return redirect('/login');
        }
    }
    
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function settings(Request $request) {
        $request->validate([
            'email' => 'required'
        ]);
        if ($request->password != '' && $request->password == $request->password_ch) {
            $request->validate([
                'password' => 'required',
                'password_ch' => 'required'
            ]);
            Auth::user()->update([
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        } else {
            Auth::user()->update([
                'email' => $request->email,
            ]);
        }
        return redirect('/cabinet/settings');
    }
}
