@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8  col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Ingresar al Sistema de Evaluadores</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                   <!-- <label><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Importante utilizar navegador Chrome o el Navegador Mozilla</strong></label>-->
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="alert alert-info" role="alert"> 
                                <h4> Aviso Importante: </h4> 
                                <p> Para el correcto funcionamiento de la plataforma de evaluadores se aconseja utilizar el navegador web <b> <i><a href="https://www.google.com/chrome/" target="_blank"> Chrome </a> o  <a href="https://www.mozilla.org/es-ES/firefox/new/" target="_blank"> Mozilla Firefox </a> </i> </b></p>
                            </div>
                        </div>
@endsection
