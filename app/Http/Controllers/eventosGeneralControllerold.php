<?php

namespace App\Http\Controllers;

use App\eventosgeneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class eventosGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $eventos=DB::table('eventos_general')->paginate(15);

    
    //dd($eventos);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eventosgeneral  $eventosgeneral
     * @return \Illuminate\Http\Response
     */
    public function show(eventosgeneral $eventosgeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventosgeneral  $eventosgeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(eventosgeneral $eventosgeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventosgeneral  $eventosgeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eventosgeneral $eventosgeneral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventosgeneral  $eventosgeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventosgeneral $eventosgeneral)
    {
        //
    }
}
