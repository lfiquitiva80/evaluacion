<?php

namespace App\Http\Controllers;

use App\proyectos_articulos;
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


class proyectos_articulosController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
            $name = $request->input('namefuncionario');
            //dd($input);
            //$proyectos_articulos = \App\proyectos_articulos::search($request->namefuncionario)->get();
            $proyectos_articulos=DB::table('proyectos_articulos')->where('DescripcionProyecto_Articulo','LIKE',"%$name%")->orderBy('id', 'desc')->paginate(15);

            $date = Carbon::now();


            return view('proyectos_articulos.index', ['proyectos_articulos' => $proyectos_articulos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('proyectos_articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(proyectos_articulosRequest $request)
    {

        flash('Se creo con Exito!')->important();
        Log::info('El usuario '. \Auth::user()->name .' Creo un nuevo proyecto y/o articulo: '.$request['Nombre_convocatoria']);


       $input = $request->all();

                        if ($request->hasFile('proyecto_pdf')) {
                        $rutaimagen = '/'.'documentos/'.$request->file('proyecto_pdf')->store('proyecto');
                         } else

                         {
                        $rutaimagen="";
                        }


                        if ($request->hasFile('calificacion_proyecto')) {

                        $rutaimagen2 = '/'.'documentos/'.$request->file('calificacion_proyecto')->store('proyecto');
                        }else

                         {
                        $rutaimagen2="";
                        }

                        if ($request->hasFile('img_proyecto')) {

                        $rutaimagen3 = '/'.'documentos/'.$request->file('img_proyecto')->store('proyecto');
                        }else

                         {
                        $rutaimagen3="";
                        }

                        if ($request->hasFile('doc_confidencialidad')) {

                        $rutaimagen4 = '/'.'documentos/'.$request->file('doc_confidencialidad')->store('proyecto');
                        }else

                         {
                        $rutaimagen4="";
                        }

                        if ($request->hasFile('doc_cuenta_cobro')) {

                        $rutaimagen5 = '/'.'documentos/'.$request->file('doc_cuenta_cobro')->store('proyecto');
                        }else

                         {
                        $rutaimagen5="";
                        }

                    $proy_pdf = new proyectos_articulos;
                    $proy_pdf->Nombre_convocatoria=$input['Nombre_convocatoria'];
                    $proy_pdf->Codigo_convocatoria=$input['Codigo_convocatoria'];
                    $proy_pdf->Presuesto=$input['Presuesto'];
                    $proy_pdf->Objetivo=$input['Objetivo'];
                    $proy_pdf->Resumen_Proyecto=$input['Resumen_Proyecto'];
                    $proy_pdf->Duracion_proyecto=$input['Duracion_proyecto'];
                    $proy_pdf->Valor_confinaciado_solicitado=$input['Valor_confinaciado_solicitado'];
                    $proy_pdf->Valor_Contrapartida_Propuesto=$input['Valor_Contrapartida_Propuesto'];
                    $proy_pdf->Valor_Total_Poryecto=$input['Valor_Total_Poryecto'];
                    $proy_pdf->Observaciones=$input['Observaciones'];
                    $proy_pdf->Metas_Indicadores_Resultados_esperados=$input['Metas_Indicadores_Resultados_esperados'];
                    $proy_pdf->Pais=$input['Pais'];
                    $proy_pdf->Departamento_Intervencioin=$input['Departamento_Intervencioin'];
                    $proy_pdf->Municipio_Intervencion=$input['Municipio_Intervencion'];
                    $proy_pdf->Sectores_Usuarios_Finales=$input['Sectores_Usuarios_Finales'];
                    $proy_pdf->Subsectores_Usuarios_Finales=$input['Subsectores_Usuarios_Finales'];
                    $proy_pdf->Num_Usuarios_Finales=$input['Num_Usuarios_Finales'];


                    $proy_pdf->Grupo_Investigacion=$input['Grupo_Investigacion'];
                    $proy_pdf->DescripcionProyecto_Articulo=$input['DescripcionProyecto_Articulo'];
                    $proy_pdf->proyecto_pdf=$rutaimagen;
                    $proy_pdf->calificacion_proyecto=$rutaimagen2;
                    $proy_pdf->img_proyecto=$rutaimagen3;
                    $proy_pdf->doc_confidencialidad=$rutaimagen4;
                    $proy_pdf->doc_cuenta_cobro=$rutaimagen5;
                    $proy_pdf->categoria=$input['categoria'];
                    $proy_pdf->CoordinadorProyecto_Articulo=$input['CoordinadorProyecto_Articulo'];
                    $proy_pdf->id_evaluador=$input['id_evaluador'];
                    $proy_pdf->pago_evaluador=$input['pago_evaluador'];
                    $proy_pdf->plantilla=$input['plantilla'];
                    $proy_pdf->sepaga=$input['sepaga'];
                    $proy_pdf->area=$input['area'];
                    $proy_pdf->centro_costos=$input['centro_costos'];
                    $proy_pdf->precioletras=$input['precioletras'];


                    $proy_pdf->save();

                  


        //Session::flash('msjevento',"Se ha registrado el Area Tematica ".$eventos_general->id." de manera exitosa!");


       return redirect()->route('proyectos_articulos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proyectos_articulos  $proyectos_articulos
     * @return \Illuminate\Http\Response
     */
    public function show(proyectos_articulos $proyectos_articulos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proyectos_articulos  $proyectos_articulos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $proyectos_articulos= proyectos_articulos::findOrFail($id);
        Log::info('El usuario '. \Auth::user()->name .' Se mostro la edición para el Id: '.$proyectos_articulos);

        //dd($eventosg);
        return view('proyectos_articulos.edit', compact('proyectos_articulos'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proyectos_articulos  $proyectos_articulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        flash('Se actualizo el registro con exito!')->important();
        Log::info('El usuario '. \Auth::user()->name .' Actualizo el id: '.$id);
        $input = $request->all();

        //dd($input);
        //sires::update($input);
        //sires::find($id)->update($input);

        //$updates=DB::table('proyectos_articulos')->where('id',"=",$id)->get();
        $updates = proyectos_articulos::find($id);

                         if ($request->hasFile('proyecto_pdf')) {
                        $rutaimagen = '/'.'documentos/'.$request->file('proyecto_pdf')->store('proyecto');
                         } else

                         {
                        $rutaimagen=$updates->proyecto_pdf;
                        }


                        if ($request->hasFile('calificacion_proyecto')) {

                        $rutaimagen2 = '/'.'documentos/'.$request->file('calificacion_proyecto')->store('proyecto');
                        }else

                         {
                        $rutaimagen2=$updates->calificacion_proyecto;
                        }

                        if ($request->hasFile('img_proyecto')) {

                        $rutaimagen3 = '/'.'documentos/'.$request->file('img_proyecto')->store('proyecto');
                        }else

                         {
                        $rutaimagen3=$updates->img_proyecto;
                        }

                        if ($request->hasFile('doc_confidencialidad')) {

                        $rutaimagen4 = '/'.'documentos/'.$request->file('doc_confidencialidad')->store('proyecto');
                        }else

                         {
                        $rutaimagen4=$updates->doc_confidencialidad;
                        }

                        if ($request->hasFile('doc_cuenta_cobro')) {

                        $rutaimagen5 = '/'.'documentos/'.$request->file('doc_cuenta_cobro')->store('proyecto');
                        }else

                         {
                        $rutaimagen5=$updates->doc_cuenta_cobro;
                        }

                    $proy_pdf = \App\proyectos_articulos::find($id);
                    $proy_pdf->Nombre_convocatoria=$input['Nombre_convocatoria'];
                    $proy_pdf->Codigo_convocatoria=$input['Codigo_convocatoria'];
                    $proy_pdf->Presuesto=$input['Presuesto'];
                    $proy_pdf->Objetivo=$input['Objetivo'];
                    $proy_pdf->Resumen_Proyecto=$input['Resumen_Proyecto'];
                    $proy_pdf->Duracion_proyecto=$input['Duracion_proyecto'];
                    $proy_pdf->Valor_confinaciado_solicitado=$input['Valor_confinaciado_solicitado'];
                    $proy_pdf->Valor_Contrapartida_Propuesto=$input['Valor_Contrapartida_Propuesto'];
                    $proy_pdf->Valor_Total_Poryecto=$input['Valor_Total_Poryecto'];
                    $proy_pdf->Observaciones=$input['Observaciones'];
                    $proy_pdf->Metas_Indicadores_Resultados_esperados=$input['Metas_Indicadores_Resultados_esperados'];
                    $proy_pdf->Pais=$input['Pais'];
                    $proy_pdf->Departamento_Intervencioin=$input['Departamento_Intervencioin'];
                    $proy_pdf->Municipio_Intervencion=$input['Municipio_Intervencion'];
                    $proy_pdf->Sectores_Usuarios_Finales=$input['Sectores_Usuarios_Finales'];
                    $proy_pdf->Subsectores_Usuarios_Finales=$input['Subsectores_Usuarios_Finales'];
                    $proy_pdf->Num_Usuarios_Finales=$input['Num_Usuarios_Finales'];
                    $proy_pdf->Grupo_Investigacion=$input['Grupo_Investigacion'];
                    $proy_pdf->DescripcionProyecto_Articulo=$input['DescripcionProyecto_Articulo'];
                    $proy_pdf->proyecto_pdf=$rutaimagen;
                    $proy_pdf->calificacion_proyecto=$rutaimagen2;
                    $proy_pdf->img_proyecto=$rutaimagen3;
                    $proy_pdf->doc_confidencialidad=$rutaimagen4;
                    $proy_pdf->doc_cuenta_cobro=$rutaimagen5;
                    $proy_pdf->categoria=$input['categoria'];
                    $proy_pdf->CoordinadorProyecto_Articulo=$input['CoordinadorProyecto_Articulo'];
                    $proy_pdf->id_evaluador=$input['id_evaluador'];
                    $proy_pdf->pago_evaluador=$input['pago_evaluador'];
                    $proy_pdf->plantilla=$input['plantilla'];
                    $proy_pdf->sepaga=$input['sepaga'];
                    $proy_pdf->area=$input['area'];
                    $proy_pdf->centro_costos=$input['centro_costos'];
                    $proy_pdf->precioletras=$input['precioletras'];



                    $proy_pdf->save();



        if (\Auth::user()->TipoUsers==0){
         return redirect()->route('homedos');
         }
        else{
            return redirect()->route('proyectos_articulos.index');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proyectos_articulos  $proyectos_articulos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        

         try
        {
          $destruir=DB::table('proyectos_articulos')->where('id', '=', $id)->delete();
          flash('Se elimino el registro!'.$id)->warning();
          Log::warning('El usuario '. \Auth::user()->name .' Elimino el id: '.$id);
             
         
        }
        catch(\Exception $e)
        {
            //$var_error=$e->get_message();
            flash('No puedes eliminar, porque tiene Criterio de Evaluacion asociados a este Proyecto!')->error();
        } 



        return redirect()->route('proyectos_articulos.index');
    }


    public function subircalificacion($id)
    {


      $proyectos_articulos= proyectos_articulos::findOrFail($id);
        Log::info('El usuario '. \Auth::user()->name .' Se mostro la edición para el Id: '.$proyectos_articulos);

        //dd($eventosg);
        return view('proyectos_articulos.calificacion', compact('proyectos_articulos'));

    }


    public function updatecalificacion(Request $request, $id)
    {

        $proy= proyectos_articulos::findOrFail($id);

        //$input =$request->all();

        dd($request->file('proyecto_pdf'));

        if ($request->hasFile('calificacion_proyecto')) {

                        $rutaimagen3 = 'documentos/'.$request->file('calificacion_proyecto')->store('proyecto');
                        }else

                         {
                        $rutaimagen3=$proy->calificacion_proyecto;
                        }

                         $proyectos_articulos= proyectos_articulos::findOrFail($id);
                         $proyectos_articulos->calificacion_proyecto= $rutaimagen3;
                         $proyectos_articulos->save();


        Log::info('El usuario '. \Auth::user()->name .' Subio la calificacion para el id: '.$id);
        //dd($eventosg);
        //return view('proyectos_articulos.calificacion', compact('proyectos_articulos'));
        return redirect()->route('homedos');

    }

    public function siAceptoElPago($id)
    {
        $siAcepto = proyectos_articulos::find($id);
        //dd($invitacion);
        $siAcepto->acepto_pago="siaceptopago";
        $siAcepto->save();
        flash('Haz aceptado el pago!')->important();
          Log::info('El usuario '. \Auth::user()->name .' acepto el pago para el id : '.$id);
          emailController::finalevaluacion($id);
        return back();
    }

     public function noAceptoElPago($id)
    {
        $noAcepto = proyectos_articulos::find($id);
        //dd($invitacion);
        $noAcepto->acepto_pago="noaceptopago";
        $noAcepto->save();
        flash('No aceptado el pago!')->important();
          Log::info('El usuario '. \Auth::user()->name .' No acepto el pago para el id : '.$id);
         
         Log::info('El usuario '. \Auth::user()->name .' Envio un correo de Certificado id: '.$id);
              flash('Haz enviado un correo de certificado!')->success();

              $invitacion = \App\proyectos_articulos::find($id);
              $invitacion->certificadoypago=0;
              $invitacion->proyecto_completado=1;
              $invitacion->correo_pago=0;
              $date = Carbon::now();
              $invitacion->Fecha_Devolucion_Evaluador=$date;
              $invitacion->save();
              $correo=\App\evaluadores::find($invitacion->id_evaluador);
              $correo2=\App\User::find($correo->id_users);  

          
        // Ship order...
         
        \Mail::to($correo2->email)->send(new certificadonopago($invitacion));



        return back();
    }








}
