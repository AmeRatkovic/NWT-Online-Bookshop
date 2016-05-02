<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Session, Validator, Redirect;
use Auth;
class PrijavaController extends Controller
{
    public function postLogin()
    {
        $rules = [
            'email' => 'required|exists:users',
            'password' => 'required'
        ];

        $input = Input::only('email', 'password');

        $validator = Validator::make($input, $rules);

        if($validator->fails())
        {
            return Redirect::to('login')->withInput()->withErrors($validator);
        }

        $credentials = [
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'potvrdjeno' => 1
        ];

        if ( ! Auth::attempt($credentials))
        {
            Session::flash('alert-class', 'alert-danger');
            Session::flash('message', 'Niste aktivirali nalog , provjerite registracijski ​​e-mail!');
            return Redirect::to('login');
        }

        return Redirect::to('home');
    }
}
