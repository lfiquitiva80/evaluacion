<?php

namespace App\Http\Controllers;

use App\evaluacion_par;
use Illuminate\Http\Request;
use App\Http\Requests\evaluacion_parRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;

class evaluacion_parController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluacion_par=DB::table('evaluacion_par')->get();
        //dd($evaluacion_par);
            return view('evaluacion_par.index', ['evaluacion_par' => $evaluacion_par]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluacion_par.create');
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
         $input = $request->all();
        $eventos_general=evaluacion_par::create($input);

        //Session::flash('msjevento',"Se ha registrado el Area Tematica ".$eventos_general->id." de manera exitosa!");
        return redirect()->route('evaluacion_par.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\evaluacion_par  $evaluacion_par
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $evaluacion_par= evaluacion_par::findOrFail($id);
            //dd($id);
            return view('evaluacion_par.show', compact('evaluacion_par'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\evaluacion_par  $evaluacion_par
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
             $evaluacion_par= evaluacion_par::findOrFail($id);
            //dd($id);
            return view('evaluacion_par.edit', compact('evaluacion_par'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\evaluacion_par  $evaluacion_par
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        flash('Se actualizco con exito!')->important();
         $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('evaluacion_par')->where('id',"=",$id)->update($input); 


        return redirect()->route('homedos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\evaluacion_par  $evaluacion_par
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        flash('Se elimino el registro!')->warning();
        $destruir=DB::table('evaluacion_par')->where('id', '=', $id)->delete();
        return redirect()->route('evaluacion_par.index');
    }
}
