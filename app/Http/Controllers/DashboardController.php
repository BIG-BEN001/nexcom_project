<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewdash(){
        return view('dashboard');
    }

    public function viewlogin(){
        return view('auth.login');
    }

    public function viewform(){
        return view('form');
    }

}
