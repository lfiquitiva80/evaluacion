<?php

namespace App\Http\Controllers;

use App\participantes;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;

class participantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $participantes=DB::table('participantes')->get();

 
    //dd($area_tematicas);
        return view('adminlte::participantes.index', ['participante' => $participantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('adminlte::participantes.create');
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
        $participantes=participantes::create($input);
         Session::flash('msjevento',"Se ha registrado un Participante ".$participantes->id." de manera exitosa!");
        

       return redirect()->route('participantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\participantes  $participantes
     * @return \Illuminate\Http\Response
     */
    public function show($participantes)
    {
        

        $participante=DB::table('participantes')->where('id_evento',"=",$participantes)->get();
         $idparticipantes=$participantes;
       //dd($participante);
        return view('adminlte::Inicio.participantes', compact(['participante','idparticipantes']));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\participantes  $participantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $participantes= participantes::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::participantes.edit', compact('participantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\participantes  $participantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('participantes')->where('id',"=",$id)->update($input); 


        return redirect()->route('participantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\participantes  $participantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $destruir=DB::table('participantes')->where('id', '=', $id)->delete();
       
        return redirect()->route('participantes.index');
    }
}
