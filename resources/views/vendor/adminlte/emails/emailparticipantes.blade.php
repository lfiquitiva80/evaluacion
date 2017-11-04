@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="container-fluid">

<div class="panel panel-default">
	<div class="panel-body">

		{!! Form::open(['action' => ['emailController@enviarcorreo',$id],'method'=>'GET']) !!}

<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
				<button type="submit" class="btn btn-primary btn-block" style='width:100px; height:200px'>Enviar</button></td>
				<td>

				<div class="form-group">
		<label for="formGroupExampleInput">Para</label>
		<input type="text" class="form-control" id="para" name="para" placeholder="Example input" value="{{$idcorreo->Correo}}">
	</div>
	<div class="form-group">
		<label for="formGroupExampleInput2">Copia</label>
		<input type="text" class="form-control" id="cc" placeholder="Digite el Correo a enviar" value="{{ Auth::user()->email}}" name="cc">
	</div>

	<div class="form-group">
		<label for="formGroupExampleInput2">Asunto:</label>
		<input type="text" class="form-control" id="asunto" name="asunto" placeholder="Digite el Correo a enviar con COPIA" value="[Evento.{{$idcorreo->id_evento}}].Certificado Curso <?php $comment = App\eventos_general::find($idcorreo->id_evento); echo $comment->NombredelEvento; ?> para {{$idcorreo->NombresApellidos}}]">
	</div>

					


				</td>
			</tr>
		</tbody>
	</table>
</div>

	<div class="form-group">
    <label for="formGroupExampleInput2"></label>
    <textarea name="cuerpocorreo" id="cuerpocorreo" class="ckeditor" rows="3" required="required">
	

	</textarea>
	

{!! Form::close() !!}
	</div>
</div>




</div>



@endsection

