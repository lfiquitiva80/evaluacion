@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


<div class="col-md-8 col-md-offset-2">



<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Configuraciones</h3>
	</div>
	<div class="panel-body">
		
	
	
		<legend>Configuración de Correos</legend>

		 {!! Form::open(['route' => ['configuracion_global.update', 1],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}
	

		@foreach ($configuracion as $row)
		<div class="form-group">
			<label for="">Configuración Correo Financiera</label>
			<input type="text" class="form-control" id="" placeholder="Input field" value="{{$row->email_financiero}}" name="email_financiero">
		</div>
		
		<div class="form-group">
			<label for="">Configuración Correo el cual le llegan copias</label>
			<input type="text" class="form-control" id="" placeholder="Input field" value="{{$row->email_msj_admin}}" name="email_msj_admin">
		</div>
	
		@endforeach
		
	
		<button type="submit" class="btn btn-primary">Actualizar</button>
	

		{!! Form::close() !!}




	</div>
</div>

</div>




@endsection