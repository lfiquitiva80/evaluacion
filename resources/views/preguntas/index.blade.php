  @extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Sistema para duplicar preguntas a otro proyecto</div>
                <div class="panel-body">


  {!! Form::open(['route' => 'preguntasduplicar', 'method'=>'GET']) !!}

   <br>
  <div><small> <strong>COPIAR LAS PREGUNTAS DEL SIGUIENTE PROYECTO A</small></strong> </div>
  <hr>
  <!--{!! Form::select('listaproyectos', $listaproyectos, Null, ['id' => 'listaproyectos', 'class' => 'form-control']) !!}-->

 <select name="listaproyectos" id="listaproyectos" class="form-control" >

  @foreach($listaproyectos2 as $row)
   <option value="{{$row->id}}">{{$row->id}}  {{$row->DescripcionProyecto_Articulo}}</option>
  @endforeach
 </select>

  <br>
  <div><small> <strong>COPIAR AL SIGUIENTE PROYECTO</small></strong> </div>
  <hr>
   <!--{!! Form::select('listaproyectos2', $listaproyectos, Null, ['id' => 'listaproyectos2', 'class' => 'form-control']) !!}-->
<select name="listaproyectos2" id="listaproyectos2" class="form-control" >

  @foreach($listaproyectos2 as $row)
   <option value="{{$row->id}}">{{$row->id}}  {{$row->DescripcionProyecto_Articulo}}</option>
  @endforeach
 </select>

   <br>

  <hr>
  <center>
  {!! Form::submit('EJECUTAR', ['class' => 'btn btn-danger']) !!}
  </center>
  {!! Form::close() !!}

          </div>
        </div>
      </div>





             <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Duplicar las preguntas de un proyecto a muchos</div>
                <div class="panel-body">


  {!! Form::open(['route' => 'duplicarproyectos', 'method'=>'GET']) !!}

   <br>
  <div><small> <strong>CANTIDAD DE PROYECTOS A CREAR</small></strong> </div>
  <hr>
 <center><div class="input-group">
   <label for="input-id" class="col-sm-2"></label>
   <input type="number" name="num_proy_duplicar" value="0">
   <br><small>*Número de duplicaciones a realizar</small>
 </div></center>

  <br>
  <div><small> <strong>Copiar apartir del siguiente proyecto.</strong> </small>
  </div>
  <hr>
   <!--{!! Form::select('listaproyectos2', $listaproyectos, Null, ['id' => 'listaproyectos2', 'class' => 'form-control']) !!}-->
<select name="listaproyectos2" id="listaproyectos2" class="form-control" >

  @foreach($listaproyectos2 as $row)
   <option value="{{$row->id}}">{{$row->id}}  {{$row->DescripcionProyecto_Articulo}}</option>
  @endforeach
 </select>

   <br>

  <hr>
  <center>
  {!! Form::submit('EJECUTAR', ['class' => 'btn btn-danger']) !!}
  </center>
  {!! Form::close() !!}
          </div>
        </div>
     </div>
  </div>














@endsection
