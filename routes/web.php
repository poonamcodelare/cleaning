<?php

use App\Exceptions\CustomException;

// User profile 
Route::get('profile','ProfileController@index')->middleware('auth');
Route::post('profile', 'ProfileController@upload');

// Book service
Route::post('book-service','BookingController@index');
Route::get('book-service', function(){
    return view('pages.booking');

        });


// my order
Route::get('orders', 'OrderController@index');


Route::get('/',function(){
    return view('pages.index');
});

// Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login','Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
});

// User Gaurd Routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


/**
 * 
 * Ajax Calls
 * 
 */

// Ajax Call for Price Page

Route::get('/prices/{location_id}','FrontController@getPricesByLocation');

//Ajax Call for Locate Us Page

Route::get('/locate-us/{location_id}','FrontController@getAddressesByLocation');

    



Route::get('/{route}',function($route){
    if(!empty($route)){
        try{
            return view("pages.{$route}");
        }catch(\Exception $e){
            throw new \App\Exceptions\CustomException('Page Not Found',404);
        }
    }
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


