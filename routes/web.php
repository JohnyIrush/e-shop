<?php

use Illuminate\Support\Facades\Route;

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

//Auth routes
Auth::routes();


/**
 * Control Front end 
 * public pages 
 * 
*/
Route::namespace('Web')->group(function(){
    Route::get('/shop','WebController@products')->name('shop');
    Route::get('/home', 'WebController@products')->name('home');
    Route::get('/', 'WebController@products')->name('/');
    Route::get('/about','WebController@about')->name('about');
    Route::get('/cart','WebController@cart')->name('cart');
    Route::get('/getcartproducts','WebController@getCartProducts')->name('getcartproducts'); //cart products
    Route::get('searchedproducts','WebController@searchedProducts')->name('searchedproducts');
    //Route::any('{slug}','WebController@pageNotFound');
    Route::get('/categoryproducts/{id}','WebController@productsBycategory')->name('categoryproducts');
    Route::get('/product/{id}','WebController@product')->name('product');
    Route::get('autosignin','WebController@AutoSignIn'); //signed in User Automatically as admin
    Route::get('/checkifsignedIn','WebController@checkIfSignedIn'); //check if user is signed in 

});


/**
 * Handle Customer
 * Profile
*/
Route::namespace('Web\Customer')->group(function(){
    Route::get('profile','CustomerController@profile')->name('profile');
    Route::get('profilelogout','CustomerController@logout')->name('profilelogout');
    Route::get('getprofiledetails','CustomerController@profileDetails')->name('getprofiledetails');
    Route::get('getadresses','CustomerController@address')->name('getadresses'); //customer edit account 
    Route::post('editaddress/{id}','CustomerController@updateAddress')->name('editaddress'); //Update customer addresses
    Route::get('defaultadress','CustomerController@defaultAddress')->name('defaultadress'); //customer default addresses 
    Route::post('deleteaccount','CustomerController@destroy')->name('deleteaccount'); //customer default addresses
    Route::post('deleteaccountreasons','CustomerController@deleteAccountReasons')->name('deleteaccountreasons'); //customer default addresses  
    Route::get('getorders','CustomerController@getOrders')->name('getorders'); //customer default addresses 
    Route::post('subscribe','CustomerController@newsletterSubscription')->name('subscribe'); //customer default addresses    
});

/**
 * Application Users
 *  management
*/
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except'=>'create','show','store']);
});

/**
 * Handle Business 
 * Products 
*/
Route::namespace('Products')->group(function(){
    Route::get('/getproducts','ProductsController@index'); //fetch products for consumption by vuejs
    Route::post('/createproduct','ProductsController@store')->name('createproduct');
    Route::post('/editproduct/{id}','ProductsController@update')->name('editproduct');
    Route::get('/deleteproduct/{id}','ProductsController@deleteProduct')->name('deleteproduct');

    Route::namespace('Categories')->group(function(){
        Route::get('/getcategories','CategoriesController@index'); //fetch categories for consumption by vuejs
        Route::get('/getallcategories','CategoriesController@index2'); //fetch categories for consumption by vuejs
        Route::post('/createcategory','CategoriesController@store')->name('createcategory');
        Route::get('deletecategory/{id}','CategoriesController@destroy')->name('deletecategory');
        Route::post('editcategory/{id}','CategoriesController@update')->name('editcategory');
    });
});

/**
 * Handle product
 * Purchase
*/
Route::namespace('Products\Purchase')->group(function(){
    Route::get('add-to-cart/{id}','PurchaseController@addtocart')->name('add-to-cart');
    Route::get('/reduce/{id}','PurchaseController@reduceProductByOne');
    Route::get('/remove/{id}','PurchaseController@removeItem');
    Route::post('/paypalpayment','PurchaseController@makePaypalPayment')->name('paypalpayment');
    Route::get('/pay','PurchaseController@paymentPage')->name('pay'); //payment page
    Route::post('/address','PurchaseController@address')->name('address'); //order adress
});

/**
 * Manage Application
*/
Route::namespace('Products\Management')->group(function(){
    Route::get('dashboard','ManagementController@dashboard')->name('dashboard');
    Route::get('products','ManagementController@productsDashboard')->name('products');
    Route::get('categories','ManagementController@categoryDashboard')->name('categories');
});


/**
 * Handle Sign Customers with 
 * social media accounts
*/
Route::namespace('Social')->group(function(){
    //Github Sign In
    Route::get('github','SocialMediaSigninController@gitHub')->name('github');
    Route::get('githubredirect','SocialMediaSigninController@gitHubRedirect')->name('githubredirect');
    //Google Sign In
    Route::get('google','SocialMediaSigninController@google')->name('google');
    Route::get('googleredirect','SocialMediaSigninController@googleRedirect')->name('googleredirect');
    //linkedin Sign In
    Route::get('linkedin','SocialMediaSigninController@linkedin')->name('linkedin');
    Route::get('linkedinredirect','SocialMediaSigninController@linkedinRedirect')->name('linkedinredirect');
    //pinterest Sign In
    Route::get('pinterest','SocialMediaSigninController@pinterest')->name('pinterest');
    Route::get('pinterestredirect','SocialMediaSigninController@pinterestRedirect')->name('pinterestredirect');
});

//forgot password reset
Route::namespace('Auth\password')->group(function(){
    //Route::post('/resetpassword','ForgotPasswordController@forgot')->name('resetpassword');
    Route::post('password-reset', 'ForgotPasswordController@reset')->name('password-reset');
});

Route::view('forgot_password', 'auth.reset_password')->name('password.reset');


//Successful product purchase email
Route::namespace('Emails')->group(function(){
    Route::get('successful-purchase', 'EmailController@successFullProductPurchase');
});





