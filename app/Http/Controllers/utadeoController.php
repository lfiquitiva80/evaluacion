<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use App\preguntas;
use App\criterios_evaluacion;
use App\proyectos_articulos;
use App\evaluadores;
use App\confidencialidad;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class utadeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preguntas=DB::table('criterios_evaluacion')->where('id_proyectos_articulos',"=",$id)->get();

         $proyectos_articulos= proyectos_articulos::find($id);
         $fecha_nacimiento = Carbon::parse($proyectos_articulos->evaluadores->Fecha_Nacimiento);
         $fecha_evaluacion = Carbon::parse($proyectos_articulos->evaluadores->Fecha_Devolucion_Evaluador);

         $evaluadores=DB::table('evaluadores')->where('id',"=",$proyectos_articulos->id_evaluador)->first();
         //dd($evaluadores);

         
         Log::info('El usuario '. \Auth::user()->name .' Se ingreso a edicion del formulario Utadeopara el Id: '.$id); 
            //dd($proyectos_articulos);
        return view('utadeo.show', compact('preguntas','proyectos_articulos','id','evaluadores','fecha_nacimiento','fecha_evaluacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $preguntas=DB::table('criterios_evaluacion')->where('id_proyectos_articulos',"=",$id)->get();

         $proyectos_articulos= proyectos_articulos::find($id);
         $fecha_nacimiento = Carbon::parse($proyectos_articulos->evaluadores->Fecha_Nacimiento);
         $fecha_evaluacion = Carbon::parse($proyectos_articulos->evaluadores->Fecha_Devolucion_Evaluador);

         $evaluadores=DB::table('evaluadores')->where('id',"=",$proyectos_articulos->id_evaluador)->first();
         //dd($evaluadores);

         
         Log::info('El usuario '. \Auth::user()->name .' Se ingreso a edicion del formulario Utadeopara el Id: '.$id); 
            //dd($proyectos_articulos);
        return view('utadeo.edit', compact('preguntas','proyectos_articulos','id','evaluadores','fecha_nacimiento','fecha_evaluacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confidencialidadUtadeo($id)
    {

        //dd($id);
        $proyectos_articulos = proyectos_articulos::find($id);
         $dt = Carbon::parse($proyectos_articulos->Fecha_Aceptacion);
         $fecha_nacimiento = Carbon::parse($proyectos_articulos->evaluadores->Fecha_Nacimiento);

         $date = Carbon::now();
         return view('utadeo.confidencialidad', compact('proyectos_articulos','dt','date','fecha_nacimiento')); 
    }


    public function showconfidencialidadUtadeo($id)
    {
        $confidencialidad= confidencialidad::where('proyectos_articulos_id',$id)->first();
       
        $proyectos_articulos = proyectos_articulos::where('id',$confidencialidad->proyectos_articulos_id)->first();
        //dd($proyectos_articulos);
        $dt = Carbon::parse($proyectos_articulos->Fecha_inicio);
        $fecha_nacimiento = Carbon::parse($proyectos_articulos->evaluadores->Fecha_Nacimiento);
           //dd($proyectos_articulos);
        
         Log::info('El usuario '. \Auth::user()->name .' esta editando: '.$confidencialidad);
        //dd($eventosg);
        return view('utadeo.showconfidencialidad', compact('confidencialidad', 'proyectos_articulos','dt','fecha_nacimiento'));
    }


}
