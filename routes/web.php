<?php
use App\User;
use App\Address;
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

//Lecture 87
Route::get('/insert', function(){
	$user = User::findorFail(2);
	$address = new Address(['name'=>'505 Pankaj Sharma Address']);
	$user->address()->save($address);

});

//Lecture 88
Route::get('/update', function(){
	$address = Address::whereUserId(1)->first();
	$address->name = "Updated 1234 Add India";
	$address->save();
});

//Lecture 89
Route::get('/read', function(){
	$user = User::findOrFail(1);
	return $user->address->name;
});

//Lecture 90
Route::get('/delete', function(){
	$user = User::findOrFail(1);
	$user->address()->delete();
	return "Done";
});