
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

 
  
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-8 col-md-offset-1">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Eventos Observatorio Colombiano de Ciencia y Tecnología</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body" id="Eventos" >
           
          <a href="{{ $url = route('eventos_general.create') }}" class="btn btn-primary">Registar Nuevos Eventos</a>

       
          <a href="{{ route('excel.index') }}" class="btn btn-success">Descargar en Excel Todos los Eventos</a>

  
          
            <table class="table table-hover" id="Eventos" >
              <thead>
                <tr>
                  <th>id</th>
                  <!--<th>Tema</th>-->
                  <th>NombredelEvento</th>
                  <!--<th>Lugar</th>
                  <th>id_ciudad</th>
                  <th>Ciudad_extranjero</th>
                  <th>Fecha_inicial</th>
                  <th>Fecha_Final</th>
                  <th>Organizador</th>
                  <th>Pais</th>
                  <th>Persona_Encargada_difusion</th>
                  <th>Usuario</th>
                  <th>Puntos_claves</th>-->
                  <th>Editar Evento</th>
                  <th>Editar Participantes del evento</th>
                  <th>Descargar Excel</th>
                  
                  

                </tr>
              </thead>



              @foreach($evento as $row)
              <tbody>
                <tr>
           <td>{{$row->id}}</td>
          <td>{{$row->NombredelEvento}}</td>



         <td><center><a href="{{ $url = route('eventos_general.edit', $row->id) }}" class="glyphicon glyphicon-edit" aria-hidden="true"> </a></center></td>
         <td><center><a href="{{action('participanteseventoController@editarevento', $row->id)}}" class="glyphicon glyphicon-user" aria-hidden="true"></a></center></td>

         <td><center><a href="{{ $url = route('xlsparticipantes', $row->id) }}" class="glyphicon glyphicon-download-alt" aria-hidden="true"> xlsx </a></center></td>


          
                </tr>
              </tbody>
              @endforeach
            </table>
          <center>{{$evento->links()}}</center>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
    </div>
  </div>






@endsection



