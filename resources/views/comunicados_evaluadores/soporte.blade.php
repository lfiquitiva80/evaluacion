@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  


	<legend>ENVIO CORREO DE PARA SOPORTE DE LA PLATAFORMA</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>
	
		{!! Form::open(['route' => 'soporte', 'method'=>'GET','enctype'=>'multipart/form-data','File'=>true]) !!}
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Envio de correo para soporte de la plataforma</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
              	<label for="">To:</label>
                <input class="form-control" name="To" placeholder="To:"  value="soporte@ocyt.org.co">
			         
              </div>

               <div class="form-group">
               	<label for="">Cc:</label>
                <input class="form-control" name="Cc" placeholder="Cc:" value="{!!Auth::user()->email!!}" required>
			         
              </div>


              <div class="form-group">
              	<label for="">Subject:</label>
                <input class="form-control" name="Subject" placeholder="Subject:" placeholder="Digite un inquietud">
              </div>
              <div class="form-group">
                <label for="">Mensaje :</label>
                    <textarea name="contenido" id="compose-textarea" class="text" style="height: 300px" cols="148">
                      
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
                
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar</button>
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

