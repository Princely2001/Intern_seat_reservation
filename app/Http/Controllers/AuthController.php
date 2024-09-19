<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CRUD;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }


    public function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $user = CRUD::where('Username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            Auth::login($user);

            return redirect()->intended('home');
        }
        return redirect()->back()->withErrors([
            'loginError' => 'Invalid username or password.',
        ])->withInput($request->except('password'));
    }

    public function AdminloginProcess(Request $request)
    {

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($request->username === 'Admin' && $request->password === 'Admin123') {

            session(['admin_logged_in' => true]);

            return redirect()->intended('Adminhome');
        }

        return redirect()->back()->withErrors([
            'loginError' => 'Invalid username or password.',
        ])->withInput($request->except('password'));
    }

}
