<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Product;
use App\User;
use App\Tecshop_user;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use AuthenticatesAndRegistersUsers;
use RedirectsUsers;
use URL;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function getSignIn(Request $request)
    {
        return view('auth.tecshopUser_Sign_In');
    }

    public function signIn(Request $request)
    {
        // dd(url()->current());
        // dd($request);
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|min:3'
           ]);

        $details = [ 'email' => $request->email , 'password' => $request->password ];
           if (Auth::guard('tecshop_signIn')->attempt($details)) {
            return redirect()->route('tecshop');
        }
           else{
                return redirect()->back()->withInput()->withErrors(['password' => 'password does not exist',
                                                                'email' => 'email does not exist']);
           }
    }

    public function signOut(Request $request) {
            Auth::guard('tecshop_signIn')->logout();
            session()->forget('cart');
            return redirect('/tecshop');
        }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
           ]);

        $credentials = [ 'email' => $request->email , 'password' => $request->password ];
           if(Auth::attempt($credentials)){
            return redirect()->route('page');

           }else{
                return redirect()->back()->withInput()->withErrors(['password' => 'password does not exist',
                                                                'email' => 'email does not exist']);
           }
        //    return redirect()->route('page');
    }


    public function logout(Request $request) {
        Auth::logout();
        return redirect('/backend');
    }
    public function logout_user(Request $request) {
        Auth::guard('tecshop_signIn');
        return redirect('/tecshop');
    }
    // public function redirectTo()
    // {
    //     $finalRedirectionTo = \Session::get('url.intended', $this->redirectTo);
    //     return $finalRedirectionTo;
    // }
}
