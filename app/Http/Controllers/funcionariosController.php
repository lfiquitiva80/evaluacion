<?php

namespace App\Http\Controllers;

use App\funcionarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class funcionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
    $name = $request->input('namefuncionario');

    // dd($name);

           $funcionarios=DB::table('funcionarios')->where('NombresApellidos','LIKE',"%$name%")
           ->orderBy('NombresApellidos', 'asc')->simplePaginate(15);

 
    //dd($funcionarios);
     return view('adminlte::funcionarios.index', ['funcionarios' => $funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('adminlte::funcionarios.create');
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
        $funcionarios=funcionarios::create($input);
        

       return redirect()->route('adminlte::funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function show(funcionarios $funcionarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionarios= funcionarios::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::funcionarios.edit', compact('funcionarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('funcionarios')->where('id',"=",$id)->update($input); 


        return redirect()->route('adminlte::funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $destruir=DB::table('funcionarios')->where('id', '=', $id)->delete();
       
        return redirect()->route('adminlte::funcionarios.index');
    }
}
