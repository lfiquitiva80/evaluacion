@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container">
<h4><b><center>PLANTILLAS PARA EVALUACIONES</h4></b></center>


<a href="{{ $url = route('plantilla.create') }}" class="btn btn-primary">Registar Nueva plantilla</a>
<p>

<div style="overflow-y: hidden;">
<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th>Edición</th>
      <th>id</th>
      <th>NombrePlantilla</th>
      <th>Institucion1</th>
      <th>ImagenInstitucion1</th>
      <th>Institucion2</th>
      <th>ImagenInstitucion2</th>
      <th>Institucion3</th>
      <th>ImagenInstitucion3</th>
      <th>Director1</th>
      <th>Cargo</th>
      <th>InstitucionDirector1</th>
      <th>Director2</th>
      <th>Cargo2</th>
      <th>InstitucionDirector2</th>
      <th>Editar</th>




    
    </tr>
  </thead>
  <tbody>

  @foreach($plantilla as $row)
    <tr>
             <td><a href="{{ $url = route('plantilla.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>  
            <td>{{$row->id}}</td>
            <td>{{$row->NombrePlantilla}}</td>
            <td>{{$row->Institucion1}}</td>
            <td><img src="{{$row->ImagenInstitucion1}}" height="100px" width="200px" /></td>
            <td>{{$row->Institucion2}}</td>
            <td><img src="{{$row->ImagenInstitucion2}}" height="100px" width="200px"/></td>
            <td>{{$row->Institucion3}}</td>
            <td><img src="{{$row->ImagenInstitucion3}}" height="100px" width="200px"/></td>
            <td>{{$row->Director1}}</td>
            <td>{{$row->Cargo}}</td>
            <td>{{$row->InstitucionDirector1}}</td>
            <td>{{$row->Director2}}</td>
            <td>{{$row->Cargo2}}</td>
            <td>{{$row->InstitucionDirector2}}</td>


              
 
        <td><a href="{{ $url = route('plantilla.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>
</div>


</div>





@endsection

