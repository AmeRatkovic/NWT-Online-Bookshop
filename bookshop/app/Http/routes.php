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

Route::resource('autor', 'AutorController');
Route::resource('izdavac', 'IzdavacController');
Route::resource('kupac', 'KupacController');
Route::resource('user', 'AutorController');
Route::resource('recenzija', 'RecenzijaController');
Route::resource('skladiste', 'SkladisteController');
Route::resource('narudzba', 'NarudzbaController');
Route::resource('kolekcija', 'KolekcijaController');

Route::resource('knjiga', 'KnjigaController');
Route::get('knjiga/{knjiga}', 'KnjigaController@show');
Route::post('knjiga/{knjiga}', 'KnjigaController@store');
Route::delete('knjiga/{knjiga}', 'KnjigaController@destroy');
Route::put('knjiga/{knjiga}', 'KnjigaController@update');

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
