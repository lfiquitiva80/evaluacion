<?php

namespace App\Http\Controllers;

use App\area_tematica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class areaTematicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $area_tematicas=DB::table('area_tematica')->get();

 
    //dd($area_tematicas);
        return view('adminlte::area_tematica.index', ['area_tematica' => $area_tematicas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('adminlte::area_tematica.create');
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
        $eventos_general=area_tematica::create($input);
        

       return redirect()->route('area_tematica.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\area_tematica  $area_tematica
     * @return \Illuminate\Http\Response
     */
    public function show(area_tematica $area_tematica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\area_tematica  $area_tematica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $area_tematica= area_tematica::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::area_tematica.edit', compact('area_tematica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\area_tematica  $area_tematica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('area_tematica')->where('id',"=",$id)->update($input); 


        return redirect()->route('area_tematica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\area_tematica  $area_tematica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destruir=DB::table('area_tematica')->where('id', '=', $id)->delete();
       
        return redirect()->route('area_tematica.index');
    }
}
