<?php

namespace App\Http\Controllers;

use App\paises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class paisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $paises=DB::table('paises')->get();

 
    //dd($area_tematicas);
        return view('adminlte::paises.index', ['pais' => $paises]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view ('adminlte::paises.create');
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
        $eventos_general=paises::create($input);
        

       return redirect()->route('paises.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paises  $paises
     * @return \Illuminate\Http\Response
     */
    public function show(paises $paises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paises  $paises
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $paises= paises::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::paises.edit', compact('paises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paises  $paises
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('paises')->where('id',"=",$id)->update($input); 


        return redirect()->route('paises.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paises  $paises
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $destruir=DB::table('paises')->where('id', '=', $id)->delete();
       
        return redirect()->route('paises.index');
    }
}
