<?php

use Illuminate\Support\Facades\Mail;
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



Route::get('/', function () {
    return view('welcome');
});

route::middleware(['auth'])->group(function(){
	
});

route::middleware(['admin'])->group(function(){

});

route::get('/mailtesting', function(){
	$to_name = 'pol.kharlo.villa@gmail.com';
	$to_email = 'pol.kharlo.villa@gmail.com';
	$data = array('control_no' =>123456);

	Mail::send('admin.mail', $data, function($message) use($to_name, $to_email){
		$message->to($to_name, $to_email)->subject('testing email');

		$message->from('hello@example.com', 'example');
	});

});


route::get('/dashboard', 'AdminController@showDashboard');
//greet person
/*Route::get('/sample', "SampleController@greetPerson");
//fruits
Route::get('/fruits', "SampleController@nameofFruits");*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


route::post('/addbook', 'AdminController@saveBook');
