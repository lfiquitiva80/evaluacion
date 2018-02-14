{!! Form::open(['route' => ['preguntas.destroy', $preguntas->id],'method'=>'DELETE']) !!}
 

<button class='btn btn-danger'><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</button>
{!! Form::close() !!}
