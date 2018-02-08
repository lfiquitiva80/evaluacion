<?php

namespace App\Http\Controllers;

use App\confidencialidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Mail\confirmacionpagofinanciera;
use App\proyectos_articulos;
use App\cuentacobro;

class confidencialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentos.confidencialidad');
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
        Log::info('El usuario '. \Auth::user()->name .' Creo una confidencialidad: ');

        $input = $request->all();

        $confidencialidad=confidencialidad::create($input);

        

         

         

       return redirect()->route('homedos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\confidencialidad  $confidencialidad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $confidencialidad= confidencialidad::where('proyectos_articulos_id',$id)->first();
        $proyectos_articulos = proyectos_articulos::find($confidencialidad->proyectos_articulos_id)->first();
        $dt = Carbon::parse($proyectos_articulos->Fecha_Aceptacion);
           //dd($proyectos_articulos);
        
         Log::info('El usuario '. \Auth::user()->name .' esta editando: '.$confidencialidad);
        //dd($eventosg);
        return view('documentos.showconfidencialidad', compact('confidencialidad', 'proyectos_articulos','dt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\confidencialidad  $confidencialidad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
          
         
        $confidencialidad= confidencialidad::findOrFail($id);
        $proyectos_articulos = proyectos_articulos::find($confidencialidad->proyectos_articulos_id)->first();
        $dt = Carbon::parse($proyectos_articulos->Fecha_Aceptacion);
           //dd($proyectos_articulos);
        
         Log::info('El usuario '. \Auth::user()->name .' esta editando: '.$confidencialidad);
        //dd($eventosg);
        return view('documentos.editconfidencialidad', compact('confidencialidad', 'proyectos_articulos','dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\confidencialidad  $confidencialidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
          flash('Se actualizo el registro con exito!')->important();
        Log::info('El usuario '. \Auth::user()->name .' Actualizo el id: '.$id);
        $input = $request->all();

        //dd($input);

        $updates=DB::table('confidencialidad')->where('id',"=",$id)->update($input);


        return redirect()->route('homedos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\confidencialidad  $confidencialidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(confidencialidad $confidencialidad)
    {
        //
    }

    public function confidencialidad($id)
    {
         $proyectos_articulos = proyectos_articulos::find($id);
         $dt = Carbon::parse($proyectos_articulos->Fecha_Aceptacion);
         $date = Carbon::now();
         return view('documentos.confidencialidad', compact('proyectos_articulos','dt','date')); 

    }
}
