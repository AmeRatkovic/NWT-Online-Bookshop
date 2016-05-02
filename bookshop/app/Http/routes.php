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

Route::post('autor/{autor}', 'AutorController@store');
Route::delete('autor/{autor}', 'AutorController@destroy');
Route::put('autor/{autor}', 'AutorController@update');

Route::resource('izdavac', 'IzdavacController');
Route::get('izdavac/{izdavac}', 'IzdavacController@show');
Route::post('izdavac/{izdavac}', 'IzdavacController@store');
Route::delete('izdavac/{izdavac}', 'IzdavacController@destroy');
Route::put('izdavac/{izdavac}', 'IzdavacController@update');




Route::resource('kupac', 'KupacController');
Route::get('kupac/{kupac}', 'KupacController@show');
Route::post('kupac/{kupac}', 'KupacController@store');
Route::delete('kupac/{kupac}', 'KupacController@destroy');
Route::put('kupac/{kupac}', 'KupacController@update');




Route::resource('recenzija', 'RecenzijaController');


Route::resource('skladiste', 'SkladisteController');



Route::resource('narudzba', 'NarudzbaController');


Route::resource('kolekcija', 'KolekcijaController');
Route::get('kolekcija/{kolekcija}', 'KolekcijaController@show');
Route::post('kolekcija/{kolekcija}', 'KolekcijaController@store');
Route::delete('kolekcija/{kolekcija}', 'KolekcijaController@destroy');
Route::put('kolekcija/{kolekcija}', 'KolekcijaController@update');


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

| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('autor/{autor}', 'AutorController@show')->middleware('isAdmin');
    Route::resource('user', 'UserController');
    Route::get('user/{user}', 'UserController@show');
    Route::post('user/{user}', 'UserController@store');
    Route::delete('user/{user}', 'UserController@destroy');
    Route::put('user/{user}', 'UserController@update');

    Route::get('/home', 'HomeController@index');

    //Ruta za email
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');
    Route::get('password/reset {token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');



    // Authentication...
    Route::get('prijava', 'Auth\AuthController@getLogin');
    Route::post('prijava', 'PrijavaController@postLogin');
    $this->get('odjava', 'Auth\AuthController@logout');

    // Password reset...
    $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'Auth\PasswordController@reset');

    // Registracija...
    Route::get('registracija', 'Auth\AuthController@getRegister');
    Route::post('registracija', 'RegistracijaController@postRegister');
    Route::get('registracija/potvrda/{konfirmacijskiKod}', 'RegistracijaController@confirm');

    //Route::get('home', 'HomeController@index');
});
