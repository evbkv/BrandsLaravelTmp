<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use Illuminate\Http\Request;
use Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('status')->get();
        return view('admin.users', compact('users'));
    }

    public function login(Request $request)
    {
        return redirect('/cabinet/news');
    }

    public function edit(User $user)
    {
        $brands = Brand::orderBy('name')->get();
        if (isset($user->id)) {
            return view('admin.userEdit', compact('brands', 'user'));
        } else {
            return view('admin.userEdit', compact('brands'));
        }
    }

    public function create(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_ch' => 'required'
        ]);
        User::create([
            'login' => $request->login,
            'email' => $request->email,
            'status' => $request->status,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/cabinet/users');
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'login' => 'required',
            'email' => 'required'
        ]);
        if ($request->password != '' && $request->password == $request->password_ch) {
            $request->validate([
                'password' => 'required',
                'password_ch' => 'required'
            ]);
            $user->update([
                'login' => $request->login,
                'email' => $request->email,
                'status' => $request->status,
                'password' => Hash::make($request->password)
            ]);
        } else {
            $user->update([
                'login' => $request->login,
                'email' => $request->email,
                'status' => $request->status,
            ]);
        }
        return redirect('/cabinet/users');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('/cabinet/users');
    }
}
