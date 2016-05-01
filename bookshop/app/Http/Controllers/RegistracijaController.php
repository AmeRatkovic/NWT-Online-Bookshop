<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator, Redirect, Session;
use App\User;
use Hash, Mail;
use Illuminate\Support\Facades\Input;

class RegistracijaController extends Controller
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
        Mail::send('auth.emails.potvrda', ['konfirmacijski_kod' => $konfirmacijski_kod], function($m) {
            $m->from('podrska@bookshop.ba', 'Bookshop');
            $m->to(Input::get('email'), Input::get('Ime'))
                ->subject('Potvrdi svoju e-mail adresu');
        });

        Session::flash('message', 'Hvala što ste se registrovali! Molimo provjerite svoj ​​e-mail za potvrdu.');

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

        Session::flash('message', 'Uspješno ste potvrdili vaš račun. Sada možete se prijaviti!');

        return Redirect::to('prijava');
    }


}
