<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){

        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('index',compact('posts'));
    }

    public function form(){
        return view('dashboard.form');
    }

    public function admin(){
        return view('dashboard.page');
    }

    public function home($id)
    {
        $posts = Product::find($id);

        return view('dashboard.home', compact('posts','id'));
    }

    public function edit($id)
    {
        $posts = Product::find($id);

        return view('dashboard.edit', compact('posts','id'));
    }
}
