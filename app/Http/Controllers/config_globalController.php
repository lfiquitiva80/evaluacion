<?php

namespace App\Http\Controllers;

use App\config_global;
use Illuminate\Http\Request;
use App\Http\Requests\proyectos_articulosRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use App\Mail\certificadonopago;

class config_globalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configuracion = DB::table('config_global')->get();
        //dd($configuracion);
        return view('configuraciones.configuraciones', compact('configuracion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\config_global  $config_global
     * @return \Illuminate\Http\Response
     */
    public function show(config_global $config_global)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\config_global  $config_global
     * @return \Illuminate\Http\Response
     */
    public function edit(config_global $config_global)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\config_global  $config_global
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $input = $request->all();
       // dd($input);
        $updates=DB::table('config_global')->where('id',"=",$id)->update($input); 

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\config_global  $config_global
     * @return \Illuminate\Http\Response
     */
    public function destroy(config_global $config_global)
    {
        //
    }
}
