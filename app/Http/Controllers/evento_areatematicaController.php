<?php

namespace App\Http\Controllers;

use App\evento_areatematica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;

class evento_areatematicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $evento_areatematica=DB::table('evento_areatematica')->get();

 
   
          return view('adminlte::evento_areatematica.index', ['evento_areatematica' => $evento_areatematica]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::evento_areatematica.create');
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
         
         $rev=$request->get('id_evento');
         //dd($rev);
        //$affected = DB::update('update sires set votes = 100 where name = ?', ['John']);
        //dd($input);
        $eventos_general=evento_areatematica::create($input);
        Session::flash('msjevento',"Se ha registrado el Area Tematica ".$eventos_general->id." de manera exitosa!");
        

       return redirect()->route('evento_areatematica.index')->with('rev',$rev);

        //return view('Inicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\evento_areatematica  $evento_areatematica
     * @return \Illuminate\Http\Response
     */
    public function show($tematica)
    {
         $evento_areatematica=DB::table('evento_areatematica')->where('id_evento',"=",$tematica)->get();
         $idtematica=$tematica;
       //dd($evento_areatematica);
        return view('adminlte::Inicio.edittematica', compact(['evento_areatematica','idtematica']));
    }

    /**
     * Show the form for editing the specified resource.



     *
     * @param  \App\evento_areatematica  $evento_areatematica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $evento_areatematica= evento_areatematica::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::evento_areatematica.edit', compact('evento_areatematica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\evento_areatematica  $evento_areatematica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('evento_areatematica')->where('id',"=",$id)->update($input); 


        return redirect()->route('evento_areatematica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\evento_areatematica  $evento_areatematica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destruir=DB::table('evento_areatematica')->where('id', '=', $id)->delete();
       
        return redirect()->route('evento_areatematica.index');
    }


  public function storenew(Request $request)
    {
         $input = $request->all();
         
         $rev=$request->get('id_evento');
         //dd($rev);
        //$affected = DB::update('update sires set votes = 100 where name = ?', ['John']);
        //dd($input);
        $eventos_general=evento_areatematica::create($input);
        Session::flash('msjevento',"Se ha registrado el Area Tematica ".$eventos_general->id." de manera exitosa!");
        

       return view('adminlte::Inicio.tematica');
        //return view('evento_areatematica.edit', ['eventos' => $rev]);

        //return view('Inicio.index');
    }

}
