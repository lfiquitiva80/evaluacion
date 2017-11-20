@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  


	<legend>EDITAR INFORMACION evaluadores</legend>

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
                <input class="form-control" name="Cc" placeholder="Cc:" value="<?php $comment = App\evaluadores::find($proyectos_articulos->id_evaluador); $comment->id_users;
          $comment2 = App\User::find($comment->id_users); echo $comment2->copiaemail;
          ?>">
			         
              </div>


              <div class="form-group">
              	<label for="">Subject:</label>
                <input class="form-control" name="Subject" placeholder="Subject:" value="Rectificación Proyecto {{$proyectos_articulos->DescripcionProyecto_Articulo}}">
              </div>
              <div class="form-group">
                    <textarea name="contenido" id="compose-textarea" class="ckeditor" style="height: 300px">
                      <h1><u>Heading Of Message</u></h1>
                      <h4>Subheading</h4>
                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                        but because occasionally circumstances occur in which toil and pain can procure him some great
                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                        except to obtain some advantage from it? But who has any right to find fault with a man who
                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                        blinded by desire, that they cannot foresee</p>
                      <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                      </ul>
                      <p>Thank you,</p>
                      <p>John Doe</p>
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

