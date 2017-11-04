<?php

namespace App\Http\Controllers;

use App\departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class departamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $departamentos=DB::table('departamento')->paginate(10);

 
    //dd($area_tematicas);
        return view('adminlte::departamento.index', ['departamento' => $departamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('adminlte::departamento.create');
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
        $eventos_general=departamento::create($input);
        

       return redirect()->route('departamento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamento= departamento::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::departamento.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('departamento')->where('id',"=",$id)->update($input); 


        return redirect()->route('departamento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $destruir=DB::table('departamento')->where('id', '=', $id)->delete();
       
        return redirect()->route('departamento.index');
    }
}
