<?php

namespace App\Http\Controllers;

use App\municipios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class municipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //dd($request);
         $municipios=DB::table('municipios')->paginate(10);

        //dd($municipios);
        return view('adminlte::municipios.index', ['municipio' => $municipios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('adminlte::municipios.create');
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
        $eventos_general=municipios::create($input);
        

       return redirect()->route('municipios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function show(municipios $municipios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $municipios= municipios::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::municipios.edit', compact('municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('municipios')->where('id',"=",$id)->update($input); 


        return redirect()->route('municipios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             
    $destruir=DB::table('municipios')->where('id', '=', $id)->delete();
       
        return redirect()->route('municipios.index');
    }
}
