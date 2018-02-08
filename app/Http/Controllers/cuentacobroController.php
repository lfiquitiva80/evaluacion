<?php

namespace App\Http\Controllers;

use App\cuentacobro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class cuentacobroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $cuenta=DB::table('cuentadecobro')->paginate(15);

        return view('cuentadecobro.index', compact('cuenta')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('cuentadecobro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         flash('Se creo con Exito!')->important();
        Log::info('El usuario '. \Auth::user()->name .' Creo una cuenta de cobro: ');

        $input = $request->all();

        $cuentacobro=cuentacobro::create($input);

       return redirect()->route('cuentadecobro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cuentacobro  $cuentacobro
     * @return \Illuminate\Http\Response
     */
    public function show(cuentacobro $cuentacobro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cuentacobro  $cuentacobro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuenta= cuentacobro::findOrFail($id);
            //dd($cuenta->proyecto_articulo_id);
        
         Log::info('El usuario '. \Auth::user()->name .' esta editando: '.$cuenta);
        //dd($eventosg);
        return view('cuentadecobro.edit', compact('cuenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cuentacobro  $cuentacobro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            flash('Se actualizo el registro con exito!')->important();
        Log::info('El usuario '. \Auth::user()->name .' Actualizo el id: '.$id);
        $input = $request->all();

        //dd($input);

        $updates=DB::table('cuentadecobro')->where('id',"=",$id)->update($input);


        return redirect()->route('cuentadecobro.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cuentacobro  $cuentacobro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        flash('Se elimino el registro!'.$id)->warning()->important();
         Log::warning('El usuario '. \Auth::user()->name .' Elimino el id: '.$id);
        $destruir=DB::table('cuentadecobro')->where('id', '=', $id)->delete();
        //return redirect()->route('criterios_evaluacion.index');
        return back();
    }


    public function crearcuentacobro($id)
    {   
       
        return view('cuentadecobro.create',compact('id'));

    }


}
