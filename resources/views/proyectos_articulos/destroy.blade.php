{!! Form::open(['route' => ['proyectos_articulos.destroy', $proyectos_articulos->id],'method'=>'DELETE']) !!}
 

<button class='btn btn-danger' ><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</button>
{!! Form::close() !!}
