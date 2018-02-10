<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use App\preguntas;
use App\criterios_evaluacion;
use App\proyectos_articulos;
use App\evaluadores;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class preguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
    {
         $name = $request->input('listaproyectos');

        //dd($input);
        $criterios_evaluacion=DB::table('criterios_evaluacion')->where('id_proyectos_articulos','LIKE',"%$name%")->paginate(15);
        $listaproyectos=DB::table('proyectos_articulos')->pluck('DescripcionProyecto_Articulo','id');
        $listaproyectos2 = DB::table('proyectos_articulos')->get();
        //dd($criterios_evaluacion);    
          return view('preguntas.index', ['criterios_evaluacion' => $criterios_evaluacion,'listaproyectos' => $listaproyectos,'listaproyectos2' => $listaproyectos2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preguntas.create');
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

        //$input = $request->all();

        Log::info('El usuario '. \Auth::user()->name .' Creo un nuevo registro: ');

        $input = $request->all();

        //dd($input);

        $criterios_evaluacion=criterios_evaluacion::create($input);  

       return redirect()->route('preguntas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       Log::info('El usuario '. \Auth::user()->name .' Se mostro la vista para el Id: '.$id); 
       $preguntas=DB::table('criterios_evaluacion')->where('id_proyectos_articulos',"=",$id)->get();
         $proyectos_articulos= proyectos_articulos::find($id);
         $evaluadores=DB::table('evaluadores')->where('id',"=",$proyectos_articulos->id_evaluador)->first();
            //dd($proyectos_articulos);
        return view('preguntas.show', compact('preguntas','proyectos_articulos','id','evaluadores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $preguntas=DB::table('criterios_evaluacion')->where('id_proyectos_articulos',"=",$id)->get();
         $proyectos_articulos= proyectos_articulos::find($id);
         $evaluadores=DB::table('evaluadores')->where('id',"=",$proyectos_articulos->id_evaluador)->first();
         Log::info('El usuario '. \Auth::user()->name .' Se ingreso a edicion para el Id: '.$id); 
            //dd($proyectos_articulos);
        return view('preguntas.edit', compact('preguntas','proyectos_articulos','id','evaluadores'));
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
       flash('Se actualizo el registro con exito!')->important();   
       Log::info('El usuario '. \Auth::user()->name .' Actualizo el id: '.$id); 
        $input = $request->all();
        //dd($input);

         $data = array('id' => $request->input('id'),'Puntaje_evaluador' => $request->input('Puntaje_evaluador'),'Justificacion_Comentarios' =>$request->input('Justificacion_Comentarios'),'Total_evaluacion' =>$request->input('Total_evaluacion'),'concepto_final'=>$request->input('concepto_final'),'recomendacion_proyecto'=>$request->input('recomendacion_proyecto'),'_method' =>$request->input('_method'), '_token' =>$request->input('_token'));
   
         //dd($input);
      foreach ($request->input('id') as $key => $value) {
          //dd($request->input('recomendacion_proyecto'));
        //dd($value);
        $updates=DB::table('criterios_evaluacion')->where('id',"=",$value)->update(['Puntaje_evaluador' => $request->Puntaje_evaluador [$key],'Justificacion_Comentarios' => $request->Justificacion_Comentarios [$key]]);
       
         }

         $updates=DB::table('criterios_evaluacion')->where('id_proyectos_articulos',"=",$id)->update(['Total_evaluacion' => $request->input ('Total_evaluacion'),'concepto_final' => $request->input ('concepto_final'),'recomendacion_proyecto' => $request->input ('recomendacion_proyecto'),'caracteristicas' => $request->input ('caracteristicas'),'conflicto_real' => $request->input ('conflicto_real'),'conflicto_aparente' => $request->input ('conflicto_aparente'),'conflicto_potencial' => $request->input ('conflicto_potencial')]);

        


                         $invitacion = \App\proyectos_articulos::find($id);
                         
                        
                         if (empty($invitacion->Fecha_inicio)) {

                          $date = Carbon::now();
                          $invitacion->Fecha_inicio=$date;
                          $invitacion->aprobo=input('aprobo');
                          $invitacion->save();

                         } 
                     
        
                    if (\Auth::user()->TipoUsers==0){
                    return redirect()->route('homedos');
                     }
                    else{
                    return redirect()->route('criterios_evaluacion.index');           
                    }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Log::warning('El usuario '. \Auth::user()->name .' Elimino el id: '.$id);
    }


    public function duplicarvarios(Request $request)
    {
        
        flash('Se copio correctamente el proyecto, Revisar muchas Gracias!!')->important();    
        $input = $request->input('listaproyectos');
        $input2 = $request->input('listaproyectos2');
      

        $criterios_evaluacion= criterios_evaluacion::where('id_proyectos_articulos',$input)->get();
        $proyectos_articulos= proyectos_articulos::where('id',$input2)->get();
        //$criterios_evaluacion2= DB::table('proyectos_articulos')->get()->last();
        //dd($proyectos_articulos);

        foreach ($criterios_evaluacion as $key => $value) {
            
        
         DB::table('criterios_evaluacion')->insert([

            'id_proyectos_articulos' => $request->input('listaproyectos2'),
            'DescripcionEvaluacion' => $value->DescripcionEvaluacion,
            'Desc_criterio_eval' => $value->Desc_criterio_eval,
            'Puntaje_Maximo' => $value->Puntaje_Maximo,
            'Deficiente' => $value->Deficiente,
            'Aceptable' => $value->Aceptable,
            'Sobresaliente' => $value->Sobresaliente,
            'Muy_Bueno' => $value->Muy_Bueno,
            'Excelente' => $value->Excelente,
                      

           ]);
         }    
        return redirect()->route('preguntas.index');
       
    }


    public function duplicarproyectos(Request $request)
    {

        $input=$request->all();
        //dd($input);

        $input2 = $request->input('listaproyectos2');
        

        flash('Se copio correctamente el proyecto, Revisar muchas Gracias!!')->important();    
        
        $input2 = $request->input('listaproyectos2');
        $cantidad = $request->input('num_proy_duplicar');


        
        
      
        $criterios_evaluacion= criterios_evaluacion::where('id_proyectos_articulos',$input2)->get();
        $proyectos_articulos= proyectos_articulos::where('id',$input2)->first();
        $evaluadores = evaluadores::where('id_users',\Auth::user()->id)->first();

        //dd($evaluadores);

       for($i=1;$i<=$cantidad;$i++){

             $input = [
                'DescripcionProyecto_Articulo' => $proyectos_articulos->DescripcionProyecto_Articulo."-Copia ".$i,
                'id_evaluador' => $evaluadores->id,
                'categoria' => $proyectos_articulos->categoria,
                'area' => $proyectos_articulos->area,
                'plantilla' => $proyectos_articulos->plantilla,
                'Objetivo' => $proyectos_articulos->Objetivo,
                'sepaga' => $proyectos_articulos->sepaga,
                'pago_evaluador' => $proyectos_articulos->pago_evaluador,
                'CoordinadorProyecto_Articulo' => $proyectos_articulos->CoordinadorProyecto_Articulo,
              
                ];

            //$leonidas = $faker->password;
        

        $createproyectos=proyectos_articulos::create($input);


        foreach ($criterios_evaluacion as $key => $value) {
            
        
         DB::table('criterios_evaluacion')->insert([

            'id_proyectos_articulos' => $createproyectos->id,
            'DescripcionEvaluacion' => $value->DescripcionEvaluacion,
            'Desc_criterio_eval' => $value->Desc_criterio_eval,
            'Puntaje_Maximo' => $value->Puntaje_Maximo,
            'Deficiente' => $value->Deficiente,
            'Aceptable' => $value->Aceptable,
            'Sobresaliente' => $value->Sobresaliente,
            'Muy_Bueno' => $value->Muy_Bueno,
            'Excelente' => $value->Excelente,
                      

           ]);
         }

         }    
        return redirect()->route('preguntas.index');
       
    
}


    public function editformeloyvalenzuela($id)
    {
         $preguntas=DB::table('criterios_evaluacion')->where('id_proyectos_articulos',"=",$id)->get();

         $proyectos_articulos= proyectos_articulos::find($id);
         $fecha_nacimiento = Carbon::parse($proyectos_articulos->evaluadores->Fecha_Nacimiento);

         $evaluadores=DB::table('evaluadores')->where('id',"=",$proyectos_articulos->id_evaluador)->first();
         //dd($evaluadores);

         
         Log::info('El usuario '. \Auth::user()->name .' Se ingreso a edicion del formulario Eloy Valenzuela para el Id: '.$id); 
            //dd($proyectos_articulos);
        return view('preguntas.formeloyvalenzuela', compact('preguntas','proyectos_articulos','id','evaluadores','fecha_nacimiento'));
    }


     public function showeloy($id)
    {
         $preguntas=DB::table('criterios_evaluacion')->where('id_proyectos_articulos',"=",$id)->get();
         $proyectos_articulos= proyectos_articulos::find($id);
         $evaluadores=DB::table('evaluadores')->where('id',"=",$proyectos_articulos->id_evaluador)->first();

         $proyectos_articulos= proyectos_articulos::find($id);

         $fecha_nacimiento = Carbon::parse($proyectos_articulos->evaluadores->Fecha_Nacimiento);

         Log::info('El usuario '. \Auth::user()->name .' Se ingreso a show del formulario Eloy Valenzuela para el Id: '.$id); 
        return view('preguntas.showeloy', compact('preguntas','proyectos_articulos','id','evaluadores','fecha_nacimiento'));


    }
        
       
       
       
        

    }





