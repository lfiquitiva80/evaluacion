<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\proyectos_articulos;
use App\Mail\rectificacion;


class comunicadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Log::info('El usuario '. \Auth::user()->name .' Ingreso a Comunicados ');
        $name = $request->input('namefuncionario');
        $comunicados=DB::table('proyectos_articulos')->where('DescripcionProyecto_Articulo','LIKE',"%$name%")
           ->orderBy('id', 'desc')->Paginate(15);

          return view('comunicados_evaluadores.index', ['comunicados' => $comunicados]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $proyectos_articulos= proyectos_articulos::findOrFail($id);
        Log::info('El usuario '. \Auth::user()->name .' Se mostro la edición para el Id: '.$proyectos_articulos);

        //dd($eventosg);
        return view('comunicados_evaluadores.edit', compact('proyectos_articulos'));
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

    public function rectificacion_errores(Request $request)
    {

        $data= $request->all();
        $Subject = $request->input('Subject');
        $Contenido = $request->input('contenido');


    \Mail::to($request->input('To'))
    ->cc($request->input('Cc'))
    ->send(new rectificacion($data,$Subject,$Contenido));

        Log::info('El usuario '. \Auth::user()->name .' Ingreso a rectificacion de errores ');
         flash('Haz enviado un de rectificación!')->success();


  $name="";

 $comunicados=DB::table('proyectos_articulos')->where('DescripcionProyecto_Articulo','LIKE',"%$name%")->orderBy('id', 'desc')->Paginate(10);



          return view('comunicados_evaluadores.index', ['comunicados' => $comunicados]);
    }



    public function soporte(Request $request)
    {

        $data= $request->all();
        $Subject = $request->input('Subject');
        $Contenido = $request->input('contenido');

    \Mail::to($request->input('To'))
    ->cc($request->input('Cc'))
    ->send(new rectificacion($data,$Subject,$Contenido));

        Log::info('El usuario '. \Auth::user()->name .' Ingreso a soporte tecnico');
         flash('Haz enviado un correo a Soporte!')->success();


            return redirect()->route('homedos');
    }

    public function enviarcorreosoporte(Request $request)
    {
         //$proyectos_articulos= proyectos_articulos::findOrFail($id);
        Log::info('El usuario '. \Auth::user()->name .'Ingreso a enviar un mail a soporte');

        //dd($eventosg);
        return view('comunicados_evaluadores.soporte');
    }


}
