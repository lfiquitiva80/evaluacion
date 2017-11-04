<?php

namespace App\Http\Controllers;

use App\tipo_participacion;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;


class tipo_participacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
     $tipo=\DB::table('tipo_participacion')->get();

      return view('tipo_participacion.index', ['tipo' => $tipo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('tipo_participacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        //$affected = DB::update('update sires set votes = 100 where name = ?', ['John']);
        //dd($input);
        $tipo_participacion=tipo_participacion::create($input);
        Session::flash('msjevento',"Se ha registrado el Evento ".$tipo_participacion->id." de manera exitosa!");

       return redirect()->route('tipo_participacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipo_participacion  $tipo_participacion
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_participacion $tipo_participacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipo_participacion  $tipo_participacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_participacion= tipo_participacion::findOrFail($id);
        //dd($eventosg);
        return view('tipo_participacion.edit', compact('tipo_participacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipo_participacion  $tipo_participacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=\DB::table('tipo_participacion')->where('id',"=",$id)->update($input); 


        return redirect()->route('tipo_participacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipo_participacion  $tipo_participacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $destruir=\DB::table('tipo_participacion')->where('id', '=', $id)->delete();
       
        return redirect()->route('tipo_participacion.index');
    }
}
