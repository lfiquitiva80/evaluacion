@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  


	<legend>ENVIO CORREO DE RECTIFICACION</legend>

 <a 	href="{{ route('evaluadores.index') }}" class="btn btn-primary" >Regresar</a><p>
	
		{!! Form::open(['route' => 'rectificacion_errores', 'method'=>'GET','enctype'=>'multipart/form-data','File'=>true]) !!}
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Envio de correo para rectificación de errores</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
              	<label for="">To:</label>
                <input class="form-control" name="To" placeholder="To:" value="<?php $comment = App\evaluadores::find($proyectos_articulos->id_evaluador); $comment->id_users;
          $comment2 = App\User::find($comment->id_users); echo $comment2->email;
          ?>">
			         
              </div>

               <div class="form-group">
               	<label for="">Cc:</label>
                <input class="form-control" name="Cc" placeholder="Cc:" value="{!!Auth::user()->email!!}" required>
			         
              </div>


              <div class="form-group">
              	<label for="">Subject:</label>
                <input class="form-control" name="Subject" placeholder="Subject:" value="Rectificación Proyecto {{$proyectos_articulos->DescripcionProyecto_Articulo}}">
              </div>
              <div class="form-group">
                    <textarea name="contenido" id="compose-textarea" class="ckeditor" style="height: 300px">
                      
                    </textarea>
              </div>
             <!-- <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="adjunto">

                  

                </div>
                <p class="help-block">Max. 32MB</p>
              </div>-->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
	



					
					{!! Form::close() !!}
					




@endsection

