<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('knjiga', 'BookControler');
Route::resource('autor', 'AutorController');
Route::resource('izdavac', 'IzdavacController');
Route::resource('kupac', 'KupacController');
Route::resource('user', 'AutorController');
Route::resource('recenzija', 'RecenzijaController');
Route::resource('skladiste', 'SkladisteController');
Route::resource('narudzba', 'NarudzbaController');
Route::resource('kolekcija', 'KolekcijaController');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|

Route::get('users', function () {
    //$users=User:All();
    $users='amer';
    return view('userhome')->('user',$users);
});

| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
