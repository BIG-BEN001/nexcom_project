<?php

namespace App\Http\Controllers;

use App\Mail\BusinessServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Product;
use App\User;

class SubscribeController extends Controller{

    public function business(Request $requests){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('pages.nexcom_business_request', compact(['requests','posts']));
    }

    public function home(Request $request){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('pages.nexcom_home_request', compact(['request','posts']));
    }

    public function business_subscribe(Request $request){

        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'tel' => $request->tel,
            'id_no' => $request->id_no,
            'address' => $request->address,
            'building' => $request->building,
            'apartment' => $request->apartment,
            'road' => $request->road,
            'town' => $request->town,
            'product' => $request->product,
            'product_type' => $request->product_type,
        ];

        Mail::to("sales@directcore.com")->send(new BusinessServiceRequest($data));

        return redirect('subscribe/thanks')->with('success', 'Thank You For Subscribing to '.$request->product.' Business Package');
    }

    public function home_subscribe(Request $request){

        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'tel' => $request->tel,
            'id_no' => $request->id_no,
            'address' => $request->address,
            'building' => $request->building,
            'apartment' => $request->apartment,
            'road' => $request->road,
            'town' => $request->town,
            'product' => $request->product,
            'product_type' => $request->product_type,
        ];

        Mail::to("sales@directcore.com")->send(new BusinessServiceRequest($data));

        return redirect('subscribe/thanks')->with('success', 'Thank You For Subscribing to '.$request->product.' Home Package');
    }

    public function thanks(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->get();
       return view('pages.thanks', compact(['posts']));
    }
}
