<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use DB;
use Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\BusinessServiceRequest;

class ProductController extends Controller
{
    public function index()
    {
        $posts = Product::all()->toArray();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact(['posts','pages']));
    }

    public function users()
    {
        $posts = User::all()->toArray();

        return view('dashboard.users', compact('posts'));
    }

    public function create(){
        return view('dashboard.form');
    }

    public function store(Request $request)
    {
        $posts = $this->validate(request(), [
            'title' => 'nullable',
            'description'=> 'nullable',
            'description2'=> 'nullable',
            'description3'=> 'nullable'
          ]);

          Product::create($posts);

          return back()->with('success', 'Entry has been added');
    }

    public function edit($id)
    {
        $posts = Product::find($id);

        return view('dashboard.edit', compact('posts'));
    }

    public function update(Request $request)
    {

        $posts = Product::find($request->get('id'));
        $this->validate(request(), [
            'title' => 'nullable',
            'description' => 'nullable',
            'description2' => 'nullable',
            'description3' => 'nullable'
        ]);
        $posts->title = $request->get('title');
        $posts->description = $request->get('description');
        $posts->description2 = $request->get('description2');
        $posts->description3 = $request->get('description3');
        $posts->save();
        return redirect('product')->with('success','Entry has been updated');
    }

    public function destroy($id)
    {
        $posts = Product::find($id);
        $posts->delete();
        return redirect('edit')->with('success','Entry has been  deleted');
    }

    public function destroy_user($id)
    {
        $posts = User::find(get('id'));
        $posts->delete();
        return redirect('users')->with('success','Entry has been  deleted');
    }

    public function header()
    {
        // $posts = Product::paginate(15);
        $posts=  Product::whereIn('id',['9','10','11','12'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact(['posts','pages']));
    }
    public function slider()
    {
        $posts = Product::all()->toArray();
       // $posts= Product::orderBy('id', 'ASC')->take(3)->get();
       $pages = Product::paginate(15);
       $posts=  Product::whereIn('id',['1','2','3'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function callback()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['7','8'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function cards()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['4','5','6'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function resint()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['16','17','18'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function banner()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['15'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }


    public function banner2()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['38'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function bisint()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['19','20','21','22'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function banner3()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['23'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }


    public function entsol()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['24','25','26'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function banner4()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['27'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function nexwifi()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['28','29','30','31'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }
    public function descriptions()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['32','33'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function contactus()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['34','35','36','37'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function fd()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['45'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function fc()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['40'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function fs()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['41'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function fl()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['42'])->get();

        return view('dashboard.ind', compact('posts'));
    }

    public function fl_about()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['43','44','46','47','48'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function fl_faqs()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['49','50','51'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function fl_terms()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['56'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function about_banner()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['43'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function about_descriptions()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['44','46','47','48'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }

    public function copyright_edit()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['70'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function copyright(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->get();
        // dd($posts);
        return view('layouts.copyright',compact('posts'));
    }


    public function login(){
        //Log::info();
        return view('auth.login');
    }

    public function admin(){
        return view('dashboard.page');
    }

    public function website(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('index',compact('posts'));
    }

    public function callback_edit(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.callback',compact('posts'));
    }

    public function nexcom_home(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.nexcom_home',compact('posts'));
    }

    public function nexcom_business(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.nexcom_business',compact('posts'));
    }

    public function business(Request $request){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('pages.nexcom_business_request',compact('posts'));
    }

    public function business_subscribe(Request $request)
    {
//        dd($request);
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

    public function solutions(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.solutions.solutions',compact('posts'));
    }

    public function sol_dedicatedint(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('pages.solutions.dedicated',compact('posts'));
    }

    public function sol_smartsol(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('pages.solutions.smart-solutions',compact('posts'));
    }

    public function sol_hosting(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('pages.solutions.hosting',compact('posts'));
    }

    public function nexcom_wifi(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.nexcom_wifi',compact('posts'));
    }

    public function contact(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.contact',compact('posts'));
    }

    public function about(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.about',compact('posts'));
    }

    public function faqs(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.faqs.faq',compact('posts'));
    }

    public function faqs_gen(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.faqs.general',compact('posts'));
    }


    public function faqs_paym(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.faqs.payments',compact('posts'));
    }

    public function faqs_prodser(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.faqs.product_services',compact('posts'));
    }

    public function faqs_technical(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('pages.faqs.technical_issues',compact('posts'));
    }

    public function faqs_other_issues(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('pages.faqs.other_issues',compact('posts'));
    }

    public function faqs_other(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('pages.faqs.other',compact('posts'));
    }

    public function terms(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('pages.termsandconditions',compact('posts'));
    }

    public function footer_edit(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('layouts.footer',compact('posts'));
    }

    public function menu_edit(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        // dd($posts);
        // exit();
        return view('layouts.menu',compact('posts'));
    }

    public function header_edit(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();

        return view('layouts.header',compact('posts'));
    }

    public function coming_soon(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();

        return view('coming_soon',compact('posts'));
    }

    public function tecshop(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();

        return view('pages.tecshop',compact('posts'));
    }

    public function platform(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();

        return view('pages.platform',compact('posts'));
    }

    public function sign_up(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();

        return view('pages.sign_up',compact('posts'));
    }

    public function payments(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();

        return view('pages.payments',compact('posts'));
    }

    public function payments_post(){
        $this->validate(request(), [
            'account' => 'required',
            'amount' => 'required',
            'first_name' => 'nullable',
            'email' => 'nullable',
            'phone' => 'required',
            'last_name' => 'nullable'
        ]);
        $data = [
            'account' => $request->account,
            'amount' => $request->amount,
            'first_name' => $request->first_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'last_name' => $request->last_name
        ];

        return redirect('payments')->with('success', 'Thank You');
    }

    public function privacy_policy(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        $hold = "Privacy Policy";
        return view('coming_soon', compact(['hold','posts']));
    }

    public function network_coverage(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        $hold = "Network Coverage";
        return view('coming_soon', compact(['hold','posts']));
    }

    public function menu_items()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['34','35','36','37'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind', compact('posts'));
    }


    public function main(){


        return view('dashboard.page_');
    }


    public function reg(){
        return view('auth.register');
    }

    public function store_reg(Request $requests)
    {
       $posts= $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

         User::create(['name'=>$posts['name'],
                    'email'=>$posts['email'],
                    'password'=> Hash::make($posts['password'])]);
        //   User::create($posts);

        return redirect('users')->with('success', 'User has been created');
    }

    public function sub_business(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['62'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind',compact('posts'));
    }

    public function sub_home(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['63'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind',compact('posts'));
    }

    public function dedicated_internet(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['65'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind',compact('posts'));
    }

    public function smart_solutions(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['66'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind',compact('posts'));
    }

    public function hosting(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['67'])->get();
        $pages = Product::paginate(15);
        return view('dashboard.ind',compact('posts'));
    }


    public function sub_business_view(){
        $posts = Product::all()->toArray();
        // $posts= Product::orderBy('id', 'ASC')->take(50)->get();
        return view('pages.nexcom_business_request',compact('posts'));
    }

    public function modal(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->take(100)->get();
        return view('modalprc',compact('posts'));
    }

    public function edit_tecshop_banner()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['71'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function tecshop_banner(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->get();
        return view('pages.tecshop',compact('posts'));
    }

    public function edit_user_accounts_bar()
    {
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['72'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function user_accounts_bar(){
        $posts = Product::all()->toArray();
        $posts= Product::orderBy('id', 'ASC')->get();
        return view('pages.tecshop',compact('posts'));
    }

    public function tec_products(){
        $items = Product::all()->toArray();
        $items= Product::whereIn('id',['80','81','82'])->get();
        $posts = Product::all()->toArray();
        return view('pages.tecshop',compact('posts','items'));
    }

    public function tec_categories(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['73'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function slide1(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['74','79','80','81','82','83','84','85'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function tab1(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['75','86','87','88'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function tab2(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['89','90','91','92'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function tab3(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['93','94','95','96'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function tab4(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['97','98','99','100'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function tab5(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['101','102','103','104','105'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function slide3(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['76','123','106','107','108','109','110','111','112'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function slide4(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['77','122','113','114','115','116','117','118','119'])->get();
        return view('dashboard.ind', compact('posts'));
    }

    public function edit_checkout_banner(){
        $posts = Product::all()->toArray();
        $posts=  Product::whereIn('id',['125'])->get();
        return view('dashboard.ind', compact('posts'));
    }
}
