<?php

use App\Exceptions\CustomException;
Auth::routes();
// User profile 
Route::get('profile','ProfileController@index')->middleware('auth');

Route::post('profile', 'ProfileController@upload');

Route::get('edit/{id}','ProfileController@edit');

Route::post('edit/update/{id}','ProfileController@update');

Route::get('delete/{id}','ProfileController@delete');

// Book service
Route::get('dry-clining', 'CommonController@dryclining');

Route::post('book-service','BookingController@index');
Route::get('book-service', function(){
    return view('pages.booking');
  });


// my order
Route::get('orders', 'OrderController@index');
// Route::post('orders', 'OrderController@store')->middleware('auth');

Route::post('orders', 'CommonController@store');






// Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login','Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
});

// User Gaurd Routes

Route::get('/home', 'HomeController@index');

Route::get('/mygallery','HomeController@gallery')->name('mygallery');

Route::get('/', 'HomeController@index');
Route::get('index', 'HomeController@index');

Route::get('scategory/{id}','HomeController@service');


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
        }
        catch(\Exception $e){
           
            throw new \App\Exceptions\CustomException('Page Not Found',404);
        }
    }
});


Auth::routes();



// GaLLERY
Route::get('gallery','GalleryController@index');

//Contact
// Route::post('/contact-us','ContactController@index');
Route::post('/contact-us-now','ContactController@store');








