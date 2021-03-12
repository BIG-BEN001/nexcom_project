<?php

namespace App\Providers;
use Cart;
use Illuminate\Support\ServiceProvider;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use DB;
use Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\BusinessServiceRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Contracts\OrderContract;
use App\Repositories\OrderRepository;
use TecshopCart;
use App\Order;
use App\TecshopProducts;
use App\OrderItem;


class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultstringLength(191);
        // View::composer('pages.tecshop', function ($view) {
        //     $view->with('cartCount', Cart::getContent()->count());
        // });
    }
}
