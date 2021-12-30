<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

//-------------back end-----------------------
//logout-----
Route::get('logout', 'Auth\LoginController@logout')->middleware('auth');

Route::get('/dashboard', 'AdminController@index')->name('dashboard')->middleware('auth');
Route::get('/home', 'HomeController@index')->middleware('auth');



//Slider=========
Route::get('sliders/create', 'SliderController@create')->middleware('auth');
Route::get('sliders/all_slider', 'SliderController@all_slider')->middleware('auth');
Route::post('sliders/store', 'SliderController@store')->middleware('auth');
Route::get('sliders/edit/{any}', 'SliderController@edit')->middleware('auth');
Route::post('sliders/update/{any}', 'SliderController@update')->middleware('auth');
Route::delete('sliders/delete/{any}', 'SliderController@delete')->middleware('auth');


//-----------------------end-----------------------
//------------------------------front end------------------------------
Route::get('/', 'WelcomeController@index');

//contact
Route::get('/contact', 'ContactController@contact');
Route::post('/save-contact', 'ContactController@save_contact');
Route::get('/show-contact', 'ContactController@show_contact');
Route::get('/delete-contact/{id}', 'ContactController@delete_contact');

//about
Route::get('/about', 'WelcomeController@about');



//email--------------------------------
Route::get('/send-email', function () {

    $details = [
        'title' => 'mail from miraj',
        'body' => 'this is for testing'
    ];
    \Mail::to("akibmiraj1998@gmail.com")->send(new\App\Mail\TestMail($details));
    return "Email sent";
});
