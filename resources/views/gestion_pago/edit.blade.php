@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


<center>@include('evaluadores.destroy')</center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['evaluadores.update', $evaluadores->id],'method'=>'PATCH']) !!}

	<legend>PROCESO DE FINANCIERA PARA CONFIRMAR EL PAGO</legend>

 <a 	href="{{ route('evaluadores.index') }}" class="btn btn-primary" >Regresar</a><p>
	

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$evaluadores->id}}" readonly="readonly">
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">id_users</label>
		<input type="text" class="form-control" name="id_users" id="id_users" placeholder="Digite un nuevo evaluador" value="{{$evaluadores->id_users}}">
	</div>

	
	<div class="form-group">
		<label for="NombreDepartamento">Cedula</label>
		<input type="text" class="form-control" name="Cedula" id="Cedula" placeholder="Digite una Cedula" value="{{$evaluadores->Cedula}}" >
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Hoja de Vida</label>
		<input type="file" class="form-control" name="HV" id="HV" placeholder="Suba la hoja de Vida"  value="{{$evaluadores->HV}}">
	</div>

	<div class="form-group">
		<label for="funcionario">Suba la Cedula</label>
		<input type="file" class="form-control" name="Cedula_pdf" id="Cedula_pdf" placeholder="Digite el cargo" value="{{$evaluadores->Cedula_pdf}}">
	</div>

	<div class="form-group">
		<label for="funcionario">Certificado_Bancario</label>
		<input type="file" class="form-control" name="Certificado_Bancario" id="Certificado_Bancario" placeholder="Digite Certificado_Bancario" value="{{$evaluadores->Certificado_Bancario}}">
	</div>

	<div class="form-group">
		<label for="funcionario">Rut</label>
		<input type="file" class="form-control" name="Rut" id="Rut" placeholder="Rut" value="{{$evaluadores->Rut}}" >
	</div>
	

	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection

