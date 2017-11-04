  


      {!! Form::open(['route' => ['subircal', $row->id],'method'=>'GET','enctype'=>'multipart/form-data','file'=>'true']) !!}
      
         <div class="form-group">
    <label for="NombreDepartamento">Calificacion proyecto</label>

    {!! Form::file('calificacion_proyecto', []) !!}
    
        {!! Form::submit('Subir Documento', ['class' => 'form-control']) !!}
          {!! Form::close() !!}
      </div>
   











  







