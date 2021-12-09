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

// Route::get('/contact/success', 'ServicesController@send');

use Illuminate\Http\Request;
use App\Mail\contactus;
use Illuminate\Support\Facades\Mail;




Route::get('/', 'ServicesController@index');
Route::get('/about', 'ServicesController@about');

Route::get('/branding', 'ServicesController@branding');
Route::get('/ui-ux', 'ServicesController@uiux');
Route::get('/web-dev', 'ServicesController@webdev');
Route::get('/video-animation', 'ServicesController@videoanimation');
Route::get('/contact', 'ServicesController@contact');
Route::post('/contact', function(Request $request){
    Mail::send( new contactus($request));
    return redirect('/contact')->with('success', 'Your email has been sent');
});
Route::get('/privacy', 'ServicesController@privacy');

Route::get('/blog', 'BlogController@index');
Route::get('/{slug}', 'BlogController@show');