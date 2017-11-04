<?php

namespace App\Http\Controllers;

use App\participantesevento;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class participanteseventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->input('name');
        $participantesevento=DB::table('participantesevento')->where('Documento','LIKE',"%$name%")
           ->orderBy('NombresApellidos', 'asc')->Paginate(15);
 
    //dd($participantesevento);

    return view('adminlte::participantesevento.index', ['participantesevento' => $participantesevento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::participantesevento.create');
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
        $participantesevento=participantesevento::create($input);
         Session::flash('msjevento',"Se ha registrado un Participante ".$participantesevento->id." de manera exitosa!");
        

       return redirect()->route('participantesevento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\participantesevento  $participantesevento
     * @return \Illuminate\Http\Response
     */
    public function show(participantesevento $participantesevento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\participantesevento  $participantesevento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participantesevento= participantesevento::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::participantesevento.edit', compact('participantesevento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\participantesevento  $participantesevento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('participantesevento')->where('id',"=",$id)->update($input); 


        return redirect()->route('participantesevento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\participantesevento  $participantesevento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destruir=DB::table('participantesevento')->where('id', '=', $id)->delete();
       
        return redirect()->route('participantesevento.index');
    }

    public function editarevento($id)
    {
      $editarevento=DB::table('participantesevento')->where('id_evento', '=', $id)->paginate(10);
      $idregevento=$id;
        //dd($eventosg);
        return view('adminlte::participantesevento.editarevento', compact('editarevento','idregevento'));
    }


     public function updateplantilla(Request $request, $id)
    {

    $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);
    //dd($id);

        $updates=DB::table('participantesevento')->where('id_evento',"=",$id)->update($input); 


        return redirect()->route('eventos_general.index');
    }




}
