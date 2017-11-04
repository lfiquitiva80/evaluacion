


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Certificado</title>
	


	<style type="text/css">
		
		.contenedor-tabla{

		display: table;

	}

		.contenedor-fila{

		display: table-row;

		}

		.contenedor-columna{

		display: table-cell;

		}

		h2{
font-weight:500; (para quitarle la negrita)
}


	</style>
	
  
</head>
<body>
@foreach($products as $row)
<div>

<img src="<?php $comment = App\plantilla::find($row->id_planilla); echo $comment->ImagenInstitucion2; ?>" align="right" height="25%" width="25%" />

<img src="<?php $comment = App\plantilla::find($row->id_planilla); echo $comment->ImagenInstitucion1; ?>" align="left" height="100px" width="200px" />




</div>
<br>
<br>

<center>


<br>
<br>
<br>

<h2>






<div>
<?php $comment = App\plantilla::find($row->id_planilla); echo $comment->Institucion1; ?>
</div>
<div>y el <?php $comment = App\plantilla::find($row->id_planilla); echo $comment->Institucion2; ?></div>
<br>
<br>


<div>Otorgan el presente CERTIFICADO a:</div>
<br>
<br>

<b>
{{$row->NombresApellidos}}<br>
{{$row->TipoDocumento}}   {{$row->Documento}}
</b>



	
<br>
<br>



Cursó el Taller <?php $comment = App\eventos_general::find($row->id_evento); echo $comment->NombredelEvento; ?>

@endforeach
<br>
<br>
<br>



</h2>

<h3>

<div class="contenedor-tabla">
    <div class="contenedor-fila">
        <div class="contenedor-columna">

        _____________________________________<br>
		<strong><?php $comment = App\plantilla::find($row->id_planilla); echo $comment->Director1; ?></strong><br>   					
		<?php $comment = App\plantilla::find($row->id_planilla); echo $comment->Cargo; ?><br>  				
		<?php $comment = App\plantilla::find($row->id_planilla); echo $comment->InstitucionDirector1; ?>
         </div>

		<div class="contenedor-columna">
		</div>

        <div class="contenedor-columna">
        
        </div>
        <div class="contenedor-columna">

        </div>
        <div class="contenedor-columna">

        
        _____________________________________<br>
        <strong><?php $comment = App\plantilla::find($row->id_planilla); echo $comment->Director2; ?></strong><br> 
		<?php $comment = App\plantilla::find($row->id_planilla); echo $comment->Cargo2; ?><br> 
		<?php $comment = App\plantilla::find($row->id_planilla); echo $comment->InstitucionDirector2; ?>
        </div>
		
        
    </div>
</div>
</h3>

					


</center>

</body>
</html>

