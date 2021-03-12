<?php

namespace App\Http\Controllers;
use App\Item;
use App\Product;
use App\Shop;
use App\Data;
use Illuminate\Http\Request;
use Session;
use View;
use App\Tecshop_users;
use App\TecshopProducts;
use App\Order;
use App\OrderItem;
use App\TecshopWishlist;
use Auth;
use DB;
use App\ItemsOrdered;
use Illuminate\Support\Facades\Hash;
use Log;

class TecshopController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->session()->get('cart'));
        $cart=session()->get('cart');
        $posts = Product::all();
        $products=  TecshopProducts::all();
        $products2=  TecshopProducts::whereIn('id',['4','5','6'])->get();
        $items= Product::whereIn('id',['80','81','82','83','84','85',
        '86','87','88','89','90','91','92','93','94','95','96','97',
        '98','99','100','101','102','103','104','105','106','107','108','109','110','111',
        '112','113','114','115','116','117','118','119','120','121'])->get();
        // dd($items);
        return view('pages.tecshop', compact(['products','products2','posts','cart','items']));
    }


    public function addToCart(Request $request,$dataId)
    {
        session()->get('cart');
        // dd($dataId);
              $product = Product::find($dataId);
        // dd($product);
        $cart = session()->get('cart');
        // dd($cart);

        if(!$cart) {

            $cart = [
                $dataId => [
                    "id"=>$product->id,
                    "product" => $product->description,
                    "quantity" => 1,
                    "price" => $product->description2,
                    "image" => $product->title,
                ]
            ];
            // dd($cart);
            session()->put('cart', $cart);
            // dd(session()->get('cart'));
            return redirect()->route('tecshop');
        }


        if(isset($cart[$dataId])) {

            // dd(session()->get('cart'));
            session()->put('cart', $cart);
            // dd(session()->get('cart'));
                // dd($cart[$dataId]['quantity']);
            return redirect()->route('tecshop');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$dataId] = [
            "id"=>$product->id,
            "product" => $product->description,
            "quantity" => 1,
            "price" => $product->description2,
            "image" => $product->title,

        ];

        session()->put('cart', $cart);

        return redirect()->route('tecshop');

    }

    public function getCart(Request $request){

        $data=session()->get('cart');
        // dd($data);
        // dd(response()->json($data));
           return response()->json($data);
    }

    public function addByOne($dataId){
        // dd($dataId);
        $products = TecshopProducts::find($dataId);
        // dd($products);
        $cart = session()->get('cart');
        // dd($cart);
        if(isset($cart[$dataId])) {
            // dd($cart[$dataId]);
            $cart[$dataId]['quantity']++;
            // dd(session()->get('cart'));
            session()->put('cart', $cart);
            //  dd(session()->get('cart'));
            $cart = session()->get('cart');
            // dd($cart);
            return response()->json($cart);

        }
    }

    public function reduceByOne($dataId){
        // dd($dataId);
        $products = TecshopProducts::find($dataId);
        // dd($products);
        $cart = session()->get('cart');
        // dd($cart);
        if (isset($cart[$dataId])) {
            // dd($cart[$dataId]);
            if ($cart[$dataId]['quantity'] > 1) {
                $cart[$dataId]['quantity']--;
                // dd(session()->get('cart'));
                session()->put('cart', $cart);
                // dd(session()->get('cart'));
                $cart = session()->get('cart');
                // dd($cart);
                return response()->json($cart);
            }
        }
    }

    public function getRemoveItem($dataId){

     $cart = session()->get('cart');
        // dd($cart[$dataId]);
        if(isset($cart[$dataId])) {

            unset($cart[$dataId]);

            session()->put('cart', $cart);
            // dd(session()->get('cart'));
            return response()->json($cart);
        }
    }


    public function checkout()
    {
        $cart = session()->get('cart');
        // dd($cart);
        if(!$cart){
            return redirect()->back();
        }else{
            // session()->put('nextUrl',url('/checkout'));
            return redirect()->route('checkout_signIn');
        }
    }

    public function post_checkout(Request $request)
    {
        $cart = session()->get('cart');
        // dd($request);
        $order= new Order();
        $order->first_name = $request->input('first_name');
        $order->last_name = $request->input('last_name');
        $order->phone_number = $request->input('phone_number');
        $order->email = $request->input('email');
        $order->street_address = $request->input('street_address');
        $order->region = $request->input('region');
        $order->total = $request->input('total');
        $order->item_count = $request->input('item_count');
        $order->order_number =uniqid();
        $order->cart = serialize($cart);
        auth()->guard('tecshop_signIn')->user()->orders()->save($order);

        foreach($cart as $key=>$value){
            Log::info($value['id']);
                // dd($db);
            if(!is_null($order)){
                $orderItem= new ItemsOrdered();
                $orderItem->quantity = $value['quantity'];
                $orderItem->price = $value['price'];
                $orderItem->tecshop_products_id = $value['id'];
                $orderItem->order_id=$order->id;
                $orderItem->product=$value['product'];
                $orderItem->save();
            }
        }

            // dd(unserialize($order->cart));
            $cart_items=unserialize($order->cart);
            // dd($cart_items);
            $posts = Product::all();

        return redirect()->route('pesatel');
    }

    public function destroyCart()
    {
        session()->forget('cart');
        // $db=Order::join('tecshop_users', 'tecshop_users.id','=','orders.tecshop_users_id' )
        //             ->get(['tecshop_users.first_name', 'orders.region']);
        // // dd($db);
        // $db2=ItemsOrdered::join('tecshop_products', 'tecshop_products.id','=','items_ordered.tecshop_products_id' )
        //                 ->join('orders', 'orders.id','=','items_ordered.order_id')
        //                 ->get(['tecshop_products.product', 'items_ordered.order_id', 'orders.first_name']);
        // // dd($db2);
        // $arr = DB::table('orders')->pluck('cart')->find(24);
        return redirect('/tecshop');
    }

    public function register(){
        return view('auth.tecshopRegister');
    }



    public function store_user_reg(Request $request)
    {

       $details= $this->validate(request(), [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        Tecshop_users::create([
            'first_name'=>$details['first_name'],
            'middle_name'=>$details['middle_name'],
            'last_name'=>$details['last_name'],
            'email'=>$details['email'],
            'password'=> Hash::make($details['password'])
            ]);
        //   User::create($posts);
        $items= Product::whereIn('id',['80','81','82','83','84','85',
        '86','87','88','89','90','91','92','93','94','95','96','97',
        '98','99','100','101','102','103','104','105','106','107','108','109','110','111',
        '112','113','114','115','116','117','118','119','120','121'])->get();

        $posts = Product::all();
        $products=  TecshopProducts::whereIn('id',['1','2','3'])->get();
        $products2=  TecshopProducts::whereIn('id',['4','5','6'])->get();


            return view('pages.tecshop', compact(['posts','products','products2','items']));
    }

    public function checkout_register(){
        return view('auth.checkoutRegister');
    }

    public function store_checkout_reg(Request $request)
    {
        // dd($request);
       $details= $this->validate(request(), [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        Tecshop_users::create([
            'first_name'=>$details['first_name'],
            'middle_name'=>$details['middle_name'],
            'last_name'=>$details['last_name'],
            'email'=>$details['email'],
            'password'=> Hash::make($details['password'])
            ]);
        //   User::create($posts);
        $items= Product::whereIn('id',['80','81','82','83','84','85',
        '86','87','88','89','90','91','92','93','94','95','96','97',
        '98','99','100','101','102','103','104','105','106','107','108','109','110','111',
        '112','113','114','115','116','117','118','119','120','121'])->get();

        $posts = Product::all();
        $products=  TecshopProducts::whereIn('id',['1','2','3'])->get();
        $products2=  TecshopProducts::whereIn('id',['4','5','6'])->get();
        if(session()->has('cart')){
            return redirect()->route('checkout');
           }
           else{
                return redirect()->route('tecshop');
           }

            // return view('pages.tecshop', compact(['posts','products','products2','items']));
    }

    public function pesatel(){

        $posts = Product::all();
        return view('pages.pesatel', compact(['posts']));
    }

    public function success(){

        $posts = Product::all();
        return view('pages.pesatel_success', compact(['posts']));
    }

    public function getCallback(Request $request){
        $user_details=auth()->guard('tecshop_signIn')->user();
        $user_id=$user_details['id'];
        // dd($user_id);
        $data = Order::where('tecshop_users_id','=', $user_id)
        ->orderBy('created_at','DESC')->first();
        // $data=Order::join('items_ordered', 'orders.id','=','items_ordered.order_id' )

        //     ->where('tecshop_users_id', $user_id)

        //     ->where('orders.status','=','completed')
        //     ->orderBy('orders.created_at','DESC')
        //     ->first(['items_ordered.product','items_ordered.quantity','items_ordered.price','orders.*']);

        return response()->json($data);
    }

    public function postCallback(Request $request)
    {
        $cb=[
            "partyB"=>"zt65m1rnq",
            "status"=>200,
            "amount"=>400,
            "customer_reference"=>"6049fb144ea3d",
            "account"=>"254718984804"
        ];
        // dd($cb['customer_reference']);
        $user_details=auth()->guard('tecshop_signIn')->user();
        // dd($user_details['id']);
        $user_id=$user_details['id'];
        // dd($user_id);
        $posts=  Order::whereIn('tecshop_users_id',[$user_id])
        ->where('order_number',$request->customer_reference)->first();
        // dd($posts);
        if($request->status==200 && $request->amount>=$posts['total']){
            dd($posts);
            $posts->status='completed';
            $posts->payment_status=3;
            $posts->save();
            // dd($posts);
            return response()->json($posts);
        }
    }

    public function getWishlist(){
        $posts = Product::all();
        $user=auth()->guard('tecshop_signIn')->user();
        if (!$user) {
            return view('auth.wishlist_signIn');
        }else{
            $posts = Product::all();
        $user = auth()->guard('tecshop_signIn')->user();
        $user_id=$user['id'];

        $wishlists=TecshopWishlist::join('tecshop_products', 'tecshop_products.id','=','tecshop_wishlists.tecshop_products_id' )
            ->where('tecshop_users_id', $user_id)
            ->get(['tecshop_products.product','tecshop_products.image','tecshop_products.price','tecshop_products.id']);
            // dd($wishlists);
            // return response()->json($wishlists);
        return view('pages.wishlist', compact('user', 'wishlists','posts'));

        }
    }

    public function wishlist_post_signIn(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|min:3'
            ]);

        $details = [ 'email' => $request->email , 'password' => $request->password ];
        if (Auth::guard('tecshop_signIn')->attempt($details)) {
            $posts = Product::all();
            $user = auth()->guard('tecshop_signIn')->user();
            $user_id=$user['id'];

            $wishlists=TecshopWishlist::join('tecshop_products', 'tecshop_products.id','=','tecshop_wishlists.tecshop_products_id' )
                ->where('tecshop_users_id', $user_id)
                ->get(['tecshop_products.product','tecshop_products.image','tecshop_products.price','tecshop_products.id']);
                // dd($wishlists);
                // return response()->json($wishlists);
            return view('pages.wishlist', compact('user', 'wishlists','posts'));
        }
    }

    public function fetchWishlist(){
        $posts = Product::all();
        
        foreach($posts as $post){
          
            $post_id=$post['id'];
        //  print_r($post['id']);
  }
        $user = auth()->guard('tecshop_signIn')->user();
        $user_id=$user['id'];
        // dd($user_id);
        $wishlists=TecshopWishlist::join('products', 'products.id','=','tecshop_wishlists.tecshop_products_id' )
            ->where('tecshop_users_id', $user_id)
            // ->where('products.id','=','tecshop_wishlists.tecshop_products_id')
            ->get(['products.title','products.description','products.description2','products.description3','products.id']);
            // dd($wishlists);
            return response()->json($wishlists);
        // return view('pages.wishlist', compact('user', 'wishlists','posts'));
       
    }

    public function storeWishlist(Request $request,$id){

        $products = Product::find($id);
        // dd($products);
        $product_id=$products['id'];
        // dd($product_id);
        $user = auth()->guard('tecshop_signIn')->user();
        $user_id=$user['id'];

        $status=TecshopWishlist::where('tecshop_users_id', $user_id)
        ->where('tecshop_products_id',$product_id)
        ->first();

        // dd($status);
        if(isset($status)){
            return redirect()->back()->with('flash_messaged', 'This item is already in your
            wishlist!');
        }else{
            $wishlist = new TecshopWishlist;
            $wishlist->tecshop_users_id = $user_id;
            $wishlist->tecshop_products_id = $product_id;
            $wishlist->save();
            // dd($wishlist);
            return redirect()->back()->with('flash_message',' Added to your wishlist.');
        }

    }

    public function countWishlist(){
        $posts = Product::all();
        $user = auth()->guard('tecshop_signIn')->user();
        $user_id=$user['id'];

        $wishlists=TecshopWishlist::join('tecshop_products', 'tecshop_products.id','=','tecshop_wishlists.tecshop_products_id' )
            ->where('tecshop_users_id', $user_id)
            ->get(['tecshop_products.product','tecshop_products.image','tecshop_products.price']);
            // dd($wishlists);
            return response()->json($wishlists);
    }

    public function removeWishlist($id){
        $user = auth()->guard('tecshop_signIn')->user();
        $user_id=$user['id'];
        $wishlist = TecshopWishlist::where('tecshop_products_id', $id)
            ->where('tecshop_users_id', $user_id)
            ->first();
        //   dd($wishlist)
        if (isset($wishlist)) {
            $wishlist->delete();
            return response()->json($wishlist);
        }
    }

    public function fetch_tec_history(){
        $posts = Product::all();
        $user = auth()->guard('tecshop_signIn')->user();
        $user_id=$user['id'];

        $det = order::where('tecshop_users_id', $user_id)
        ->where('status', 'completed')
            ->get();
            // dd($det);
        $cart=ItemsOrdered::join('orders', 'orders.id','=','items_ordered.order_id' )
            ->join('products', 'products.id','=','items_ordered.tecshop_products_id' )
            ->where('tecshop_users_id', $user_id)
            ->where('status', 'completed')
            ->get(['products.title','products.description','products.description2','products.description3']);

        // dd($cart);
        session()->put('history', $cart);
        $hist=session()->get('history');
        // dd($hist);
        return response()->json($hist);
        // return view('pages.orderHistory', compact('posts','values'));
    }

    public function tec_history(){
        $posts = Product::all();
        return redirect()->route('tec_history_signIn');
    }

    public function tec_history_signIn(){
        $posts = Product::all();
        $user=auth()->guard('tecshop_signIn')->user();
        if (!$user) {
            return view('auth.tec_history_signIn');
        }else{
            return view('pages.orderHistory', ['posts'=>$posts]);
        }
    }

    public function tec_history_post_signIn(Request $request){

        $this->validate($request, [
        'email'   => 'required|email',
        'password'  => 'required|min:3'
        ]);

        $details = [ 'email' => $request->email , 'password' => $request->password ];
        if (Auth::guard('tecshop_signIn')->attempt($details)) {
            // $user = auth()->guard('tecshop_signIn')->user();

            $posts = Product::all();

            return view('pages.orderHistory', ['posts'=>$posts]);
        }
    }

    public function removeHistory($id){
       $hist= session()->get('history');
       foreach($hist as $val){
           // dd($val['product']);
           if($val['id']==$id){
                unset($val['id']);
                dd($val);
                session()->put('hist',$val);
                // dd(session()->get('hist'));
                return response()->json($val);
           }
       }
            // return view('pages.orderHistory', compact('posts'));
    }

    public function tec_search(Request $request){
        // dd($request);
        $posts = Product::all();
        $query = $request->query('search');
        // dd($query);
        if(!is_null($query)){
            $products = TecshopProducts::where('product', 'like', '%' . $query . '%')
            ->orWhere('price', 'like', '%' . $query . '%')
            ->get();
            return view('pages.search_data',compact('posts','products'));
            // return response()->json($products);
        }else{
            return redirect()->back();
        }
        // dd($products);
    }

    public function tec_invoice(Request $request){
        return view('pages.tecshop_invoice');
    }

    public function checkout_signIn(Request $request)
    {
        $posts = Product::all();
        $user=auth()->guard('tecshop_signIn')->user();
        if (!$user) {
            return view('auth.checkout_signIn',compact('posts'));
        } else {

            return view('pages.checkout',compact('posts'));
        }
    }

    public function checkout_post_signIn(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|min:3'
           ]);

        $details = [ 'email' => $request->email , 'password' => $request->password ];
           if (Auth::guard('tecshop_signIn')->attempt($details)) {
            // $user = auth()->guard('tecshop_signIn')->user();
                $posts = Product::all();

            return view('pages.checkout', ['posts'=>$posts]);
        }

    }

}
