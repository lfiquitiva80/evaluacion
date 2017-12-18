<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\eventos_general;
use App\participantesevento;
use App\proyectos_articulos;
use App\criterios_evaluacion;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class excelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            //$input=$request->all();
            //dd($input);
            /*if ($request->input('Fecha_Inicial')==NULL) {

                $fechas=proyectos_articulos::all();

            } else {
               $fechas=proyectos_articulos::whereBetween($request->input('Fechas'), [$request->input('Fecha_Inicial'),$request->input('Fecha_Final')])->get();
            }


            //dd($fechas);


            flash('Se descargo el archivo correctamente de todos los proyectos y/o artículos!')->important();
        //$input = $request->all();

        Log::info('El usuario '. \Auth::user()->name .' Descargo el reporte de todos los proyectos y/o articulos por fecha');


         //dd($products);

        \Excel::create('sistema', function($excel)use ($fechas) {
            $excel->sheet('sistema', function($sheet) use ($fechas){


              //$products=eventos_general::all();

         //dd($products);

         $sheet->loadView('excel.excelproyectosall', ['products' => $fechas]);

            });
        })->export('csv');    */

           return view('excel.index');
    }


     public function rangofechas(Request $request)
    {

       $fechas=proyectos_articulos::whereBetween($request->input('Fechas'), [$request->input('Fecha_Inicial'),$request->input('Fecha_Final')])->get();
       //dd($fechas);


            flash('Se descargo el archivo correctamente de todos los proyectos y/o artículos!')->important();
        //$input = $request->all();

        Log::info('El usuario '. \Auth::user()->name .' Descargo el reporte de todos los proyectos y/o articulos por fecha');


         //dd($products);

        \Excel::create('Proyectos_articulos_Fechas', function($excel)use ($fechas) {
            $excel->sheet('Proyectos_articulos_Fechas', function($sheet) use ($fechas){


              //$products=eventos_general::all();

         //dd($products);

         $sheet->loadView('excel.excelproyectosall', ['products' => $fechas]);

            });
        })->export('xlsx');



    }


    public function excelparticipantesall()
    {

       $products=DB::table('participantesevento')->get();

       flash('Se descargo el archivo correctamente!')->important();
        //$input = $request->all();

        Log::info('El usuario '. \Auth::user()->name .' Descargo el reporte: ');

        \Excel::create('participantes', function($excel)use ($products) {
            $excel->sheet('participantes', function($sheet) use ($products){


              //$products=eventos_general::all();

         //dd($products);

         $sheet->loadView('adminlte::excel.xlsxparticipantes', ['products' => $products]);

            });
        })->export('xlsx');


    }



    public function excelproyectosall()
    {

       $products=DB::table('proyectos_articulos')->get();

       flash('Se descargo el archivo correctamente de todos los proyectos y/o artículos!')->important();
        //$input = $request->all();

        Log::info('El usuario '. \Auth::user()->name .' Descargo el reporte de todos los proyectos y/o articulos');


         //dd($products);

        \Excel::create('Proyectos_articulos', function($excel)use ($products) {
            $excel->sheet('Todos los proyectos', function($sheet) use ($products){


              //$products=eventos_general::all();

         //dd($products);

         $sheet->loadView('excel.excelproyectosall', ['products' => $products]);

            });
        })->export('xlsx');


    }


      public function allusers()
    {
       $products=DB::table('users')->get();

        flash('Se descargo el archivo correctamente de todos los usuarios!')->important();
        //$input = $request->all();

        Log::info('El usuario '. \Auth::user()->name .' Descargo el reporte de todos los proyectos y/o articulos');
        //dd($products);

        \Excel::create('users', function($excel)use ($products) {
            $excel->sheet('users', function($sheet) use ($products){
            $sheet->loadView('excel.usuarios', ['products' => $products]);
            });
        })->export('xlsx');
    }


     public function allevaluadores()
    {
       $products=DB::table('evaluadores')->join('users', 'id_users', '=', 'users.id')
            ->select('users.*','evaluadores.*')
            ->get();
      //dd($products);
            

        flash('Se descargo el archivo correctamente de todos los evaluadores!')->important();
        //$input = $request->all();

        Log::info('El usuario '. \Auth::user()->name .' Descargo el reporte de todos los evaluadores');

        \Excel::create('evaluadores', function($excel)use ($products) {
            $excel->sheet('evaluadores', function($sheet) use ($products){
            $sheet->loadView('excel.evaluadores', ['products' => $products]);
            });
        })->export('xlsx');
    }

//descarga la información del proyecto eloy // 
      public function eloy()
    {
    /*$products=DB::table('criterios_evaluacion')->join('proyectos_articulos', 'id_proyectos_articulos', '=', 'proyectos_articulos.id')
            ->select('proyectos_articulos.*','criterios_evaluacion.*')
            ->get();*/

          $products=proyectos_articulos::all();
          $criterios_evaluacion=DB::table('criterios_evaluacion')->get();
          
          //dd($products);

            flash('Se descargo el archivo correctamente !')->important();
        //$input = $request->all();

        Log::info('El usuario '. \Auth::user()->name .' Descargo el reporte para Eloy');

           //$monolog = Log::getMonolog();
        //dd($monolog);

        \Excel::create('criterios_evaluacion', function($excel)use ($products) {
            $excel->sheet('criterios_evaluacion', function($sheet) use ($products){
            $sheet->loadView('excel.eloy', ['products' => $products]);
            });


        })->export('xlsx');
    }


       public function allcriterios()
    {
       $products=DB::table('criterios_evaluacion')->join('proyectos_articulos', 'id_proyectos_articulos', '=', 'proyectos_articulos.id')
            ->select('proyectos_articulos.*','criterios_evaluacion.*')
            ->get();

          //dd($products);

            flash('Se descargo el archivo correctamente de todos los criterios de evalaución!')->important();
        //$input = $request->all();

        Log::info('El usuario '. \Auth::user()->name .' Descargo el reporte de todos los criterios de evaluación');

           //$monolog = Log::getMonolog();
        //dd($monolog);

        \Excel::create('criterios_evaluacion', function($excel)use ($products) {
            $excel->sheet('criterios_evaluacion', function($sheet) use ($products){
            $sheet->loadView('excel.criterios_evaluacion', ['products' => $products]);
            });
        })->export('xlsx');
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
}
