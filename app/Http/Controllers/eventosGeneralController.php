<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\eventos_general;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;

class eventosGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $Request)
    {

        //dd($Request);
         // $eventos=eventos_general::NombreEvento($request->get('NombredelEvento'))->orderby('NombredelEvento')->paginate(10);
        // if (trim($Request)!=""){
        // $eventos=eventos_general::where('NombredelEvento',$Request->NombredelEvento)->get();
        // }
     $eventos=DB::table('eventos_general')->orderBy('id', 'desc')->paginate(15);

 
    //dd($area_tematicas);
      return view('adminlte::eventos_general.index', ['evento' => $eventos]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        return view('adminlte::eventos_general.create');

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
        $eventos_general=eventos_general::create($input);
        Session::flash('msjevento',"Se ha registrado el Evento ".$eventos_general->id." de manera exitosa!");

        //dd($input);

       return redirect()->route('eventos_general.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eventos_general  $eventos_general
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventos_general= eventos_general::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::eventos_general.show', compact('eventos_general'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventos_general  $eventos_general
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventos_general= eventos_general::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::eventos_general.edit', compact('eventos_general'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventos_general  $eventos_general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('eventos_general')->where('id',"=",$id)->update($input); 


        return redirect()->route('eventos_general.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventos_general  $eventos_general
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
    $destruir=DB::table('eventos_general')->where('id', '=', $id)->delete();
       
        return redirect()->route('eventos_general.index');
    }


    public  function buscador($request)

    {

        $eventos=eventos_general::where('NombredelEvento',$request->NombredelEvento)->get();
        dd($request->NombredelEvento);
        // return view('eventos_general.index', ['evento' => $eventos]);


    }

}


