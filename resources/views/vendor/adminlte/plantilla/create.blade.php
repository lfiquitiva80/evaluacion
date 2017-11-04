
@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
   <a href="{{ route('plantilla.index') }}" class="btn btn-primary" >Regresar</a><p>



{!! Form::open(['route' => 'plantilla.store', 'method'=>'POST', 'files'=>'true', 'enctype'=>'multipart/form-data']) !!}
	<legend>CREAR FORMULARIO DE PLANTILLA</legend>



	
		<div class="form-group">
		<label for="formGroupExampleInput2">Nombre de la Plantilla</label>
		<input type="text" class="form-control" id="NombrePlantilla" name="NombrePlantilla" placeholder="Digite el Nombre de la Plantilla">
	</div>
	
	<div class="form-group">
		<label for="formGroupExampleInput2">Primera Institucion</label>
		<input type="text" class="form-control" id="Institucion1" placeholder="Digite la primera Institucion" name="Institucion1" required>
	</div>
	<br>
	<label for="exampleInputFile">Imagen de la Primera Institución</label>
	<div class="panel panel-default">
	<div class="form-group">
    
    <input type="file" class="custom-file-input" name="ImagenInstitucion1" id="ImagenInstitucion1" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Subir la imagen de la Primera Institución, con formato .jpg , .png o .bmp</small>
  </div>
  	</div>
	
  	<div class="form-group">
		<label for="formGroupExampleInput2">Segunda Institucion</label>
		<input type="text" class="form-control" id="Institucion2" placeholder="Digite la primera Institucion" name="Institucion2" required>
	</div>
	<br>
	<label for="exampleInputFile">Imagen de la Segunda Institución</label>
	<div class="panel panel-default">
	
	<div class="form-group">
        <input type="file" class="custom-file-input" name="ImagenInstitucion2" id="ImagenInstitucion2" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Subir la imagen de la Segunda Institución, con formato .jpg , .png o .bmp</small>
  </div>
  	</div>


  	<div class="form-group">
		<label for="formGroupExampleInput2">Tercera Institucion</label>
		<input type="text" class="form-control" id="Institucion3" placeholder="Digite la primera Institucion" name="Institucion3" required>
	</div>
	
	<label for="exampleInputFile">Imagen de la Tercera Institución</label>
	<div class="panel panel-default">
	
	<div class="form-group">
        <input type="file" class="custom-file-input" name="ImagenInstitucion3" id="ImagenInstitucion3" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Subir la imagen de la Tercera Institución, con formato .jpg , .png o .bmp</small>
  </div>
  	</div>

	<table class="table">
		<thead>
			<tr>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td >

		<div class="form-group">
		<label for="formGroupExampleInput2">Nombre del Primer Director</label>
		<input type="text" class="form-control" id="Director1" name="Director1" placeholder="Digite el Nombre del primer Director que aparecera en la certificación">
	</div>

	<div class="form-group">
		<label for="formGroupExampleInput2">Nombre del Cargo Primer Director</label>
		<input type="text" class="form-control" id="Cargo" name="Cargo" placeholder="Digite el Cargo del primer Director que aparecera en la certificación">
	</div>

	<div class="form-group">
		<label for="formGroupExampleInput2">Nombre de la Institucion Primer Director</label>
		<input type="text" class="form-control" id="InstitucionDirector1" name="InstitucionDirector1" placeholder="Digite la Institución del primer Director que aparecera en la certificación">
	</div></td>
				<td ><div class="form-group">
		<label for="formGroupExampleInput2">Nombre del Segundo Director</label>
		<input type="text" class="form-control" id="Director2" name="Director2" placeholder="Digite el Nombre del Segundo Director que aparecera en la certificación" value="Clara Inés Pardo Martínez, Ph.D" >
	</div>

	<div class="form-group">
		<label for="formGroupExampleInput2">Nombre del Cargo del Segundo Director</label>
		<input type="text" class="form-control" id="Cargo2" name="Cargo2" placeholder="Digite el Cargo del Segundo Director que aparecera en la certificación" value="Directora Ejecutiva">
	</div>

	<div class="form-group">
		<label for="formGroupExampleInput2">Nombre de la Institucion Segundo Director</label>
		<input type="text" class="form-control" id="InstitucionDirector2" name="InstitucionDirector2" placeholder="Digite la Institución del Segundo Director que aparecera en la certificación" value="Observatorio Colombiano de Ciencia y Tecnología">
	</div>
</td>
			</tr>
		</tbody>
	</table>


  	

	




{!! Form::submit('Enviar', ['class'=>'btn btn-success']) !!}






{!! Form::close() !!}




  </div>
</div>


@endsection

