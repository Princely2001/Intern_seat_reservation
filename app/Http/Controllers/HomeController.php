<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CRUD;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function index(){

        return view('pages.home.index');
    }
    public function res(){

        return view('pages.home.res');
    }
    public function login(){

        return view('login');
    }
    public function Aboutus(){

        return view('Aboutus');
    }
    public function payment(){

        return view('payment');
    }
    public function Admin(){

        return view('Admin');
    }
    public function Adminhome(){

        return view('Adminhome');
    }
    public function Addseat(){

        return view('Addseat');
    }
    public function ViewRes(){

        return view('ViewRes');
    }
    public function Viewattendance(){

        return view('Viewattendance');
    }
}


