<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Mail\confirmacionpagofinanciera;
use App\proyectos_articulos;
use App\cuentacobro;


class gestionpagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //flash('Haz enviado un correo de confirmación de pago!')->success();
        Log::info('El usuario '. \Auth::user()->name .' Ingreso a gestionar el pago ');
        $name = $request->input('namefuncionario');

    // dd($name);

           $comunicados=DB::table('proyectos_articulos')->where(
    'DescripcionProyecto_Articulo', 'LIKE', '%$name%')->orWhere('correo_gestion_pago', 1)->orderBy('id', 'desc')->Paginate(10);

           //$filtro=DB::table('proyectos_articulos')->where('correo_gestion_pago','=',1)->get();
           


        

          return view('gestion_pago.index', ['comunicados' => $comunicados]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function confirmacionpago($id)
         { 
           
              Log::info('El usuario '. \Auth::user()->name .' Envio un correo de confirmacion de pago: '.$id);
              flash('Haz enviado un correo de confirmación de pago!')->success();



             $invitacion = \App\proyectos_articulos::find($id);
        //dd($invitacion);
        
            $date = Carbon::now();
            $invitacion->Fecha_Pago_Financiera=$date;
            $invitacion->save();

           $correo=\App\evaluadores::find($invitacion->id_evaluador);
           $correo2=\App\User::find($correo->id_users);  
             
            \Mail::to($correo2->email)->send(new confirmacionpagofinanciera($invitacion, $correo));

       

         return redirect()->route('gestion_pago.index');
        } 



         public function cuentacobro($id)

            {
                  $proyectos_articulos = proyectos_articulos::find($id);
                  $cuenta= cuentacobro::where('proyectos_articulos_id',$id)->first();
                  //dd($cuenta);



              return view('documentos.cuentacobro', compact('proyectos_articulos','cuenta'));

            }

     public function confidencialidad($id)

            {
                 $proyectos_articulos = proyectos_articulos::find($id);
                
                 $dt = Carbon::parse($proyectos_articulos->Fecha_Aceptacion);
                 



              return view('documentos.confidencialidad', compact('proyectos_articulos','dt'));   
            }


}
