<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator, Redirect, Session;
use App\User;
use Hash, Mail;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    public function postRegister()
    {
        $rules = [
            'Ime' => 'required|max:255',
            'Prezime' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:1',
        ];

        $input = Input::only(
            'Ime',
            'Prezime',
            'email',
            'password',
            'password_confirmation'
        );

        $validator = Validator::make($input, $rules);

        if($validator->fails())
        {
            return Redirect::to('register')->withInput()->withErrors($validator);
        }

        $konfirmacijski_kod = str_random(30);

        User::create([
            'Ime' => Input::get('Ime'),
            'Prezime' => Input::get('Prezime'),
            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password')),
            'konfirmacijski_kod' => $konfirmacijski_kod
        ]);

        //Funkcija za slanje emaila
        Mail::send('auth.emails.confirmation', ['konfirmacijski_kod' => $konfirmacijski_kod], function($m) {
            $m->from('podrska@bookshop.ba', 'Bookshop');
            $m->to(Input::get('email'), Input::get('Ime'))
                ->subject('Please confirm your email address');
        });

        Session::flash('message', 'Thank you for registering. Check your email for confirmation.');

        return Redirect::to('register');
    }

    //Potvrda o registraciji
    public function confirm($konfirmacijski_kod)
    {
        if(!$konfirmacijski_kod)
        {
            throw new InvalidConfirmationCodeException;
        }

        $korisnik = User::where('konfirmacijski_kod', $konfirmacijski_kod)->first();

        if (!$korisnik)
        {
            throw new InvalidConfirmationCodeException;
        }

        $korisnik->potvrdjeno = 1;
        $korisnik->konfirmacijski_kod = null;
        $korisnik->save();

        Session::flash('message', 'You have successfully confirmed your email address. You can log in now.');

        return Redirect::to('login');
    }


}
