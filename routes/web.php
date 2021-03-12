<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/home', function () {
//     return view('index');
// });
//Route::get('/home', 'HomeController@index');
// Route::get('/nexcom-home', function () {
//     return view('pages.nexcom_home');
// });

// Route::get('/nexcom-wifi', function () {
//     return view('pages.nexcom_wifi');
// });

// Route::get('/nexcom-business', function () {
//     return view('pages.nexcom_business');
// });
// Route::get('/coming-soon', function () {
//     return view('pages.coming_soon');
// });
// Route::get('/contact', function () {
//     return view('pages.contact');
// });

Route::post('/contact', 'ContactController@sendCont');

Route::get('/callback', 'ContactController@callBack');

// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/network-coverage', function () {
//         $hold = "Network Coverage";
//     return view('coming_soon', compact(['hold']));
// //    return view('pages.network_coverage');
// });
// Route::get('/FAQs', function () {
//     return view('pages.faqs.faq');
// });
// Route::get('/FAQs-General', function () {
//     return view('pages.faqs.general');
// });
// Route::get('/FAQs-Payments', function () {
//     return view('pages.faqs.payments');
// });
// Route::get('/FAQs-Technical-Issues', function () {
//     return view('pages.faqs.technical_issues');
// });
// Route::get('/FAQs-Other-Issues', function () {
//     return view('pages.faqs.other_issues');
// });
// Route::get('/FAQs-Product-Services', function () {
//     return view('pages.faqs.product_services');
// });
// Route::get('/FAQs-Other', function () {
//     return view('pages.faqs.other');
// });

Route::get('/get-in-touch', function () {
    return view('pages.get_in_touch');
});

Route::post('/get-in-touch', 'ContactController@getInTouch');

Route::get('/subscribe/business', 'SubscribeController@business');
Route::post('/subscribe/business', 'SubscribeController@business_subscribe');

Route::get('/subscribe/home', 'SubscribeController@home');
Route::post('/subscribe/home', 'SubscribeController@home_subscribe');

Route::get('/subscribe/thanks', 'SubscribeController@thanks');


//sessions example
Route::get('/session/set','TecshopController@storeSessionData');
Route::get('/session/get','TecshopController@accessSessionData');
Route::get('/session/remove','TecshopController@deleteSessionData');
// Route::get('/sign-up', function () {
//     return view('pages.sign_up');
// });
// Route::get('/terms-and-conditions', function () {
//     return view('pages.termsandconditions');
// });
// Route::get('/solutions', function () {
//     $hold = "Solutions";
// //    return view('coming_soon', compact(['hold']));
//     return view('pages.solutions.solutions');
// });
// Route::get('/solutions/dedicated-internet', function () {
//     return view('pages.solutions.dedicated');
// });
// Route::get('/solutions/smart-solutions', function () {
//     return view('pages.solutions.smart-solutions');
// });
// Route::get('/solutions/hosting', function () {
//     return view('pages.solutions.hosting');
// });
// Route::get('/privacy-policy', function () {
//     $hold = "Privacy Policy";
//     return view('coming_soon', compact(['hold']));
// });
// Route::get('/coming-soon', function () {
// //    dd('lala');
//     return view('coming_soon');
// });

// Route::get('/dash', 'ProductController@create')->name('dash');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/package', 'PackageController@postGuzzleRequest');

Auth::routes();
Route::resource('product','ProductController');
Route::get('/backend', 'ProductController@login')->name('log');
// Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/website', 'ProductController@website');
Route::post('/store', 'ProductController@store');
Route::get('/', 'PagesController@index')->name('nexcom');
Route::post('/form', 'ProductController@store')->name('form');
Route::get('/nexcom', 'PagesController@index');
Route::post('/update', 'ProductController@update');
Route::get('/nexcom-home', 'ProductController@nexcom_home');
Route::get('/nexcom-business', 'ProductController@nexcom_business');
// Route::get('/subscribe_business', 'ProductController@business');
// Route::post('/subscribe_business', 'ProductController@subscribe_business');
Route::get('/solutions', 'ProductController@solutions');
Route::get('/solutions/dedicated-internet', 'ProductController@sol_dedicatedint');
Route::get('/solutions/smart-solutions', 'ProductController@sol_smartsol');
Route::get('/solutions/hosting', 'ProductController@sol_hosting');
Route::get('/nexcom-wifi', 'ProductController@nexcom_wifi');
Route::get('/contact', 'ProductController@contact');
Route::get('/FAQs', 'ProductController@faqs');
Route::get('/FAQs-General', 'ProductController@faqs_gen');
Route::get('/FAQs-Payments', 'ProductController@faqs_paym');
Route::get('/FAQs-Product-Services', 'ProductController@faqs_prodser');
Route::get('/FAQs-Technical-Issues', 'ProductController@faqs_technical');
Route::get('/FAQs-Other-Issues', 'ProductController@faqs_other_issues');
Route::get('/FAQs-Other', 'ProductController@faqs_other');
Route::get('/terms-and-conditions', 'ProductController@terms');
Route::get('/hp', 'PagesController@home');
Route::get('/about', 'ProductController@about');
Route::get('/destroy_user/{id}', 'ProductController@destroy_user');
Route::post('/register_store', 'ProductController@store_reg');
// Route::get('/subscribe_business', 'ProductController@business');
// Route::post('/subscribe_business', 'ProductController@subscribe_business');
Route::get('/subscribe_business', 'ProductController@sub_business');
Route::get('/subscribe_home', 'ProductController@sub_home');
// Route::get('/sub_business_view', 'ProductController@sub_business_view');
Route::get('/dedicated_internet', 'ProductController@dedicated_internet');
Route::get('/smart_solutions', 'ProductController@smart_solutions');
Route::get('/hosting', 'ProductController@hosting');
Route::get('/coming-soon', 'ProductController@coming_soon');
// Route::get('/tecshop', 'ProductController@tecshop');
Route::get('/sign-up', 'ProductController@sign_up');
Route::get('/payments', 'ProductController@payments')->name('payments');
Route::post('/payments_post', 'ProductController@payments_post')->name('payments_post');
Route::get('/privacy-policy', 'ProductController@privacy_policy');
Route::get('/network-coverage', 'ProductController@network_coverage');
Route::get('/copyright', 'ProductController@copyright');
Route::get('/platform', 'ProductController@platform');
Route::group(['middleware' => 'ProtectRoute'], function () {
    Route::get('/form', 'PagesController@form')->name('form');
    Route::get('/edit', 'ProductController@index');
    Route::get('/page', 'PagesController@admin')->name('page'); //admin landing page
    Route::get('/edit_header', 'ProductController@header');
    Route::get('/edit_slider', 'ProductController@slider'); //sliders
    Route::get('/edit_callback', 'ProductController@callback');
    Route::get('/edit_navitems', 'ProductController@nav');
    Route::get('/edit_cards', 'ProductController@cards');
    Route::get('/edit_resint', 'ProductController@resint'); //residential internet
    Route::get('/edit_banner', 'ProductController@banner');
    Route::get('/edit_banner2', 'ProductController@banner2');
    Route::get('/edit_bisint', 'ProductController@bisint'); //business internet
    Route::get('/edit_banner3', 'ProductController@banner3');
    Route::get('/edit_entsol', 'ProductController@entsol'); //enterprise solutions
    Route::get('/edit_banner4', 'ProductController@banner4');
    Route::get('/edit_nexwifi', 'ProductController@nexwifi');
    Route::get('/edit_contact', 'ProductController@contactus'); //contact us page
    Route::get('/edit_footer', 'ProductController@footer');
    Route::get('/edit_descriptions', 'ProductController@descriptions');
    Route::get('/edit_fd', 'ProductController@fd');
    Route::get('/edit_fc', 'ProductController@fc');
    Route::get('/edit_fs', 'ProductController@fs');
    Route::get('/edit_fl', 'ProductController@fl');
    Route::get('/edit_fl_about', 'ProductController@fl_about'); //about us page
    Route::get('/edit_fl_faqs', 'ProductController@fl_faqs');
    Route::get('/edit_fl_terms', 'ProductController@fl_terms');
    Route::get('/main', 'ProductController@main');
    Route::get('/edit_callback', 'ProductController@callback');
    Route::get('/callback_view', 'ProductController@callback_edit');
    Route::get('/footer', 'ProductController@footer_edit');
    Route::get('/menu_items', 'ProductController@menu_items');
    Route::get('/menu_edit', 'ProductController@menu_edit');
    Route::get('/header_edit', 'ProductController@header_edit');
    Route::get('/users', 'ProductController@users');
    Route::get('/register', 'ProductController@reg');
    Route::get('/destroy_user/{id}', 'ProductController@destroy_user');
    Route::get('/edit_pg/{id}', 'ProductController@edit')->name('edit');
    Route::get('/about_banner', 'ProductController@about_banner');
    Route::get('/about_descriptions', 'ProductController@about_descriptions');
    Route::get('/edit_copyright', 'ProductController@copyright_edit');
    Route::get('/tecshop_banner', 'ProductController@edit_tecshop_banner');
    Route::get('/user_accounts_bar', 'ProductController@edit_user_accounts_bar');
    Route::get('/edit_checkout_banner', 'ProductController@edit_checkout_banner');
});
Route::get('/modal', 'ProductController@modal');
// Route::match(array('GET', 'POST'),'/addToCart', 'TecshopController@addToCart')->name('add');
Route::get('/tecshop', 'TecshopController@index')->name('tecshop');
Route::post('/addToCart/{dataId}', 'TecshopController@addToCart')->name('add');
// Route::get('/checkout', 'TecshopController@checkout')->name('checkout');
Route::get('/empty', 'TecshopController@destroyCart')->name('empty');
Route::get('/welcome', 'TecshopController@welcome');
Route::get('/getCart', 'TecshopController@getCart')->name('cart');
Route::get('/reduceByOne/{dataId}', 'TecshopController@reduceByOne')->name('reduce');
Route::get('/remove/{dataId}', 'TecshopController@getRemoveItem')->name('remove');
Route::get('/addByOne/{dataId}', 'TecshopController@addByOne')->name('addItem');
Route::get('/tecshop_register', 'TecshopController@register')->name('user_register');
Route::post('/user_register_store', 'TecshopController@store_user_reg')->name('store_user_reg');
Route::post('/user_signIn', 'Auth\LoginController@signIn')->name('signIn');
Route::get('/user_signIn', 'Auth\LoginController@getSignIn')->name('getSignIn');
Route::get('/user_signOut', 'Auth\LoginController@signOut')->name('signOut');
Route::group(['middleware' => 'tecshop'], function () {


    Route::get('/pesatel', 'TecshopController@pesatel')->name('pesatel');
    Route::get('/get_pesatel_callback', 'TecshopController@getCallback')->name('getCallback');
    Route::get('/post_pesatel_callback', 'TecshopController@postCallback')->name('postCallback');
    Route::get('/success', 'TecshopController@success')->name('success');


    Route::get('/removeHistory/{dataId}', 'TecshopController@removeHistory')->name('removeHistory');
});
Route::get('/checkout', 'TecshopController@checkout')->name('checkout');
Route::post('/post_checkout', 'TecshopController@post_checkout')->name('post_checkout');
Route::get('/count_wishlist', 'TecshopController@countWishlist')->name('countWishlist');
Route::get('/removeWishlist/{id}', 'TecshopController@removeWishlist')->name('removeWishlist');
Route::get('/fetchWishlist', 'TecshopController@fetchWishlist')->name('fetchWishlist');
Route::get('/tec_search', 'TecshopController@tec_search')->name('tec_search');
Route::get('/tec_invoice', 'TecshopController@tec_invoice')->name('tec_invoice');
Route::get('/tecshop_edit', 'TecshopController@tecshop_edit')->name('tecshop_edit');
Route::get('/tec_products', 'ProductController@tec_products')->name('tec_products');
Route::get('/tec_categories', 'ProductController@tec_categories')->name('tec_categories');
Route::get('/slide1', 'ProductController@slide1')->name('slide1');
Route::get('/tab1', 'ProductController@tab1')->name('tab1');
Route::get('/tab2', 'ProductController@tab2')->name('tab2');
Route::get('/tab3', 'ProductController@tab3')->name('tab3');
Route::get('/tab4', 'ProductController@tab4')->name('tab4');
Route::get('/tab5', 'ProductController@tab5')->name('tab5');
Route::get('/slide3', 'ProductController@slide3')->name('slide3');
Route::get('/slide4', 'ProductController@slide4')->name('slide4');
Route::get('/checkout_signIn', 'TecshopController@checkout_signIn')->name('checkout_signIn');
Route::post('/checkout_page', 'TecshopController@checkout_post_signIn')->name('checkout_post_signIn');
Route::get('/tec_history', 'TecshopController@tec_history')->name('tec_history');
Route::get('/fetch_tec_history', 'TecshopController@fetch_tec_history')->name('fetch_tec_history');
Route::get('/tec_history_signIn', 'TecshopController@tec_history_signIn')->name('tec_history_signIn');
Route::post('/tec_history_page', 'TecshopController@tec_history_post_signIn')->name('tec_history_post_signIn');
Route::get('/getWishlist', 'TecshopController@getWishlist')->name('getWishlist');
Route::post('/store_wishlist/{id}', 'TecshopController@storeWishlist')->name('storeWishlist');
Route::get('/wishlist', 'TecshopController@getWishlist')->name('getWishlist');
Route::post('/wishlist_post_signIn', 'TecshopController@wishlist_post_signIn')->name('wishlist_post_signIn');
Route::get('/checkout_register', 'TecshopController@checkout_register')->name('checkout_register');
Route::post('/store_checkout_reg', 'TecshopController@store_checkout_reg')->name('store_checkout_reg');
