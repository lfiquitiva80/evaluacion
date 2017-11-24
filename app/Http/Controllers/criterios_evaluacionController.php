<?php

namespace App\Http\Controllers;

use App\criterios_evaluacion;
use App\proyectos_articulos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class criterios_evaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

         $name = $request->input('listaproyectos');

        //dd($input);
        $criterios_evaluacion=DB::table('criterios_evaluacion')->where('id_proyectos_articulos',$name)->paginate(15);
     //$listaproyectos=DB::table('proyectos_articulos')->pluck('DescripcionProyecto_Articulo','id');
       $listaproyectos=proyectos_articulos::all();

return view('criterios_evaluacion.index', ['criterios_evaluacion' => $criterios_evaluacion,'listaproyectos' => $listaproyectos ,'id' => $name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('criterios_evaluacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        flash('Se creo con Exito!')->important();
        Log::info('El usuario '. \Auth::user()->name .' Creo una nueva pregunta: ');

        $input = $request->all();

        $criterios_evaluacion=criterios_evaluacion::create($input);

       return redirect()->route('criterios_evaluacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\criterios_evaluacion  $criterios_evaluacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $criterios_evaluacion= criterios_evaluacion::findOrFail($id);
       Log::info('El usuario '. \Auth::user()->name .' Reviso la vista del id:'.$criterios_evaluacion);

        //dd($criterios_evaluacion);
        return view('criterios_evaluacion.show', compact('criterios_evaluacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\criterios_evaluacion  $criterios_evaluacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $criterios_evaluacion= criterios_evaluacion::findOrFail($id);
        Log::info('El usuario '. \Auth::user()->name .' Se mostro la edición para el Id: '.$criterios_evaluacion);
        //dd($criterios_evaluacion);
        return view('criterios_evaluacion.edit', compact('criterios_evaluacion'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\criterios_evaluacion  $criterios_evaluacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        flash('Se actualizo el registro con exito!')->important();
        Log::info('El usuario '. \Auth::user()->name .' Actualizo el id: '.$id);
        $input = $request->all();

        //dd($input);

        $updates=DB::table('criterios_evaluacion')->where('id',"=",$id)->update($input);


         if (\Auth::user()->TipoUsers==0){
         return redirect()->route('homedos');
         }
        else{
            return redirect()->route('criterios_evaluacion.index');
        }


        //return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\criterios_evaluacion  $criterios_evaluacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         flash('Se elimino el registro!'.$id)->warning();
         Log::warning('El usuario '. \Auth::user()->name .' Elimino el id: '.$id);
        $destruir=DB::table('criterios_evaluacion')->where('id', '=', $id)->delete();
        //return redirect()->route('criterios_evaluacion.index');
        return back();
    }


    public function duplicar(Request $request, $duplicar)
    {

        //for($i=1;$i<=39;$i++){
        $input= $request->all();
        //dd($duplicar);

        $criterios_evaluacion= criterios_evaluacion::findOrFail($duplicar);
        flash('Se Duplico correctamente!'.$duplicar)->warning();
        Log::warning('El usuario '. \Auth::user()->name .' Duplico la pregunta: '.$criterios_evaluacion);
        //$criterios_evaluacion2= DB::table('proyectos_articulos')->get()->last();
        //dd($criterios_evaluacion2);


         DB::table('criterios_evaluacion')->insert([

            'id_proyectos_articulos' => $criterios_evaluacion->id_proyectos_articulos,
            'DescripcionEvaluacion' => $criterios_evaluacion->DescripcionEvaluacion,
            'Desc_criterio_eval' => $criterios_evaluacion->Desc_criterio_eval,
            'Puntaje_Maximo' => $criterios_evaluacion->Puntaje_Maximo,
            //'Puntaje_evaluador' => $criterios_evaluacion->Puntaje_evaluador,
            'Deficiente' => $criterios_evaluacion->Deficiente,
            'Aceptable' => $criterios_evaluacion->Aceptable,
            'Sobresaliente' => $criterios_evaluacion->Sobresaliente,
            'Muy_Bueno' => $criterios_evaluacion->Muy_Bueno,
            'Excelente' => $criterios_evaluacion->Excelente,
            //'Justificacion_Comentarios' => $criterios_evaluacion->Justificacion_Comentarios,
            //  'Total_evaluacion' => $criterios_evaluacion->Total_evaluacion,
            //'concepto_final' => $criterios_evaluacion->concepto_final,
            //'recomendacion_proyecto' => $criterios_evaluacion->recomendacion_proyecto,

           ]);
         //}
        //return redirect()->route('criterios_evaluacion.index');
       return back();
    }
}
