@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container">
<h4><b><center>REGISTRO RELACION EVENTO AREA TEMATICA </h4></b></center>






<a href="{{ $url = route('evento_areatematica.create') }}" class="btn btn-primary">Registrar Evento_area</a>
<p>

<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th>id</th>
<th>Id_evento</th>
<th>Tematica</th>
<th>Edición</th>



    
    </tr>
  </thead>
  <tbody>

  @foreach($evento_areatematica as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->id_evento}}</td>
         <td><?php $comment = App\area_tematica::find($row->id_areatematica); echo $comment->Tematica ?> </td>
         
      
 
        <td><a href="{{ $url = route('evento_areatematica.edit', $row->id) }}" class="glyphicon glyphicon-pencil" aria-hidden="true"></a></td>
        <!--<td><a href="{{ $url = route('evento_areatematica.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->

      
              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>



</div>



  

@endsection




    