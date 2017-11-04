<?php

namespace App\Http\Controllers;

use App\tiquetes;
use App\eventos_general;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;

class tiquetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tiquetes=DB::table('tiquetes')->get();

 
    //dd($area_tematicas);
        return view('adminlte::Inicio.tiquetes', ['tiquete' => $tiquetes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('tiquetes.create');
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
        $eventos_general=tiquetes::create($input);
         Session::flash('msjevento',"Se ha registrado un Tiquete ".$eventos_general->id." de manera exitosa!");
        

       return redirect()->route('tiquetes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tiquetes  $tiquetes
     * @return \Illuminate\Http\Response
     */
    public function show($tiquetes)
    {
         $tiquete=DB::table('tiquetes')->where('id_evento',"=",$tiquetes)->get();
         $idtiquetes=$tiquetes;
       //dd($tiquete);
        return view('adminlte::Inicio.edittiquetes', compact(['tiquete','idtiquetes']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tiquetes  $tiquetes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $tiquetes= tiquetes::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::tiquetes.edit', compact('tiquetes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tiquetes  $tiquetes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('tiquetes')->where('id',"=",$id)->update($input); 


        return redirect()->route('tiquetes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tiquetes  $tiquetes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destruir=DB::table('tiquetes')->where('id', '=', $id)->delete();
       
        return redirect()->route('tiquetes.index');
    }
}
