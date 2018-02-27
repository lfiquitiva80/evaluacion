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
use App\Mail\certificadoypago;


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

          // $comunicados=DB::table('proyectos_articulos')->where(
    //'DescripcionProyecto_Articulo', 'LIKE', '%$name%')->orWhere('correo_gestion_pago', 1)->orderBy('Fecha_Pago_Financiera', 'asc')->Paginate(10);

           $comunicados=DB::table('proyectos_articulos')->orWhere(function ($query) {
                $query->where('correo_gestion_pago', 1)
                      ->whereNull('Fecha_Pago_Financiera');
            })->Paginate(10);

           //dd($comunicados);

           //$filtro=DB::table('proyectos_articulos')->where('correo_gestion_pago','=',1)->get();
           $comunicados2=DB::table('proyectos_articulos')->whereNotNull('Fecha_Pago_Financiera')->orderBy('Fecha_Pago_Financiera', 'asc')->Paginate(10);


        

          return view('gestion_pago.index', compact('comunicados','comunicados2'));
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
            $invitacion->certificadoypago=1;
            $invitacion->save();

           $correo=\App\evaluadores::find($invitacion->id_evaluador);
           $correo2=\App\User::find($correo->id_users);
           $config_global = \App\config_global::find(1);  
             
           // \Mail::to($correo2->email_financiera)->send(new confirmacionpagofinanciera($invitacion, $correo));

           \Mail::to($correo2->email)->cc($config_global->email_msj_admin)->send(new certificadoypago($invitacion));


       

         return redirect()->route('gestion_pago.index');
        } 



         public function cuentacobro($id)

            {
                  $proyectos_articulos = proyectos_articulos::find($id);
                  $cuenta= cuentacobro::where('proyectos_articulos_id',$id)->first();
                  $fecha_nacimiento = Carbon::parse($proyectos_articulos->evaluadores->Fecha_Nacimiento);

                  //dd($cuenta);



              return view('documentos.cuentacobro', compact('proyectos_articulos','cuenta','fecha_nacimiento'));

            }

     public function confidencialidad($id)

            {
                 $proyectos_articulos = proyectos_articulos::find($id);
                
                 $dt = Carbon::parse($proyectos_articulos->Fecha_Aceptacion);
                 $fecha_nacimiento = Carbon::parse($proyectos_articulos->evaluadores->Fecha_Nacimiento);
                 



              return view('documentos.confidencialidad', compact('proyectos_articulos','dt','fecha_nacimiento'));   
            }


}
