@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Editar Usuario</div>
                <br>
                <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>

                <div class="panel-body">
                    {!! Form::open(['route' => ['usuarios.update', $usuarios->id],'method'=>'PATCH']) !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$usuarios->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$usuarios->email}}" required>

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
                                <input id="password" type="password" class="form-control" name="password" required >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Tipo de Usuario</label>

                          <div class="col-md-6">

								<select class="form-control" name="TipoUsers">

									@if ($usuarios->TipoUsers==0)
									<option value="0" selected>Estandar</option>
									<option value="1">Administrador</option>
									@else
									<option value="0" >Estandar</option>
									<option value="1" selected>Administrador</option>

									@endif

								</select>

                            </div>
                        </div>

                         <div class="form-group">
                            <label for="" class="col-md-4 control-label">Tratamiento para Cartas y Certificados</label>

                          <div class="col-md-6">


                                <select class="form-control" name="id_tratamiento" id="id_tratamiento">
                                    @foreach ($cartas as $row)
                                    @if ($usuarios->id_tratamiento==$row->id)
                                    <option value="{{$row->id}}" selected>{{$row->Abreviacion}}  {{$row->Titulo}}</option>
                                    @else
                                    <option value="{{$row->id}}" >{{$row->Abreviacion}}  {{$row->Titulo}}</option>
                                    @endif

                                      @endforeach
                                </select>


                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success pull-right">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





{!! Form::close() !!}





@endsection
