<?php

Route::get('/',function()
{
    return view('welcome');
});


Auth::routes();


Route::get('/login', function(){
    
       if (Auth::check()){
    
        return redirect()->route('dashboard');
       }
       else{
           return view('auth.login');
       }
    })-> name('login');
Route::get('/logout', function(){

    Auth::logout();

    return view('welcome');

});


//Route::get('/home2', 'HomePageController@index_old');
Route::get('/light-fruit-salad', 'ProductPageController@productone')->name('productone');
Route::get('/pro-fruit-salad', 'ProductPageController@producttwo')->name('producttwo');
Route::get('/on-demand', 'ProductPageController@ondemand')->name('ondemand');

Route::post('/final-checkout', ['as'=> 'checkout', 'uses'=> 'ProductPageController@checkoutt']);
Route::get('/final-checkout', ['as'=> 'checkout', 'uses'=> 'OrderHistoryController@create']);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//Dashboard routes
Route::get('/subscriptions', 'DashboardController@subscription')->name('subscriptions');
Route::get('/orderhistory', 'DashboardController@orders')->name('order-history');
Route::get('/feedback', 'DashboardController@feedback')->name('feedback');
Route::get('/settings', 'DashboardController@settings')->name('settings');


// Routes for OAuth authentication via various providers
Route::get('auth/{providerName}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{providerName}/callback', 'Auth\LoginController@handleProviderCallback');

/**
 * LaravelPaystack Specific routes
 */
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');


Route::get('plan/subscribe', 'SubscriptionPlanController@showSubscriptionPage')->name('subscribe-to-plan');

Route::resource('plan', 'SubscriptionPlanController');

/**
 * Quick Fruit Specific Routes
 */
Route::post('contact-details', 'UserController@updateContactDetails')->name('update_contact_details');

/**
 * Paystack Specific Routes
 */
Route::get('list-customers', 'PaystackController@getCustomers');
Route::get('create-customer', 'PaystackController@createCustomer');

Route::get('paystackRedirect', 'PaystackController@handleSubscriptionCallback');
Route::get('paymentProvider/callback', 'PaystackController@handleSubscriptionCallback');
Route::post('subscribe-to-plan', 'PaystackController@subscribeToPlan')->name('subscribe_to_plan');

