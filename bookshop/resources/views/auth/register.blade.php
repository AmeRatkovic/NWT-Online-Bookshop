@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

                    @if (Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('Ime') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">First Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Ime" placeholder="Jhon" value="{{ old('Ime') }}">

                                @if ($errors->has('Ime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Ime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Prezime') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Second Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Prezime" placeholder="Snow"value="{{ old('Prezime') }}">

                                @if ($errors->has('Prezime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Prezime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="example@mail.com" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" placeholder="Password1" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" placeholder="Password1"  name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Captcha</label>
                            <div class="col-md-6">
                                {!! app('captcha')->display(); !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                            <button type="submit" id="btn-signup" class="btn btn-success"><i class="fa fa-hand-o-right"></i> &nbsp Sign Up</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
