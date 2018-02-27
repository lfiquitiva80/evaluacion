<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\eventos_general;
use App\proyectos_articulos;
use App\TipoDocumento;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $carbon = new \Carbon\Carbon();
        $date = $carbon->now();
        

  $evaluadores=DB::table('evaluadores')->where('id_users','=',\Auth::user()->id)->first();
  Log::info('El usuario '. \Auth::user()->name .' Ingreso al Sistema ');

  
  $proyectos_articulos=DB::table('proyectos_articulos')->where([
    ['id_evaluador','=',$evaluadores->id],
    ['proyecto_completado', '=', '0'],
])->orderBy('id', 'desc')->get();
    


    /*$proyectos_articulos=DB::table('proyectos_articulos')->leftjoin('evaluadores', 'proyectos_articulos.id_evaluador', '=', 'evaluadores.id_users')
        ->select('proyectos_articulos.*', 'evaluadores.id_users')->get();*/

    $historicos=DB::table('proyectos_articulos')->where([
    ['id_evaluador','=',$evaluadores->id],
    ['proyecto_completado', '=', '1'],
])->orderBy('id', 'desc')->get();;       

     $evaluadores=DB::table('evaluadores')->where('id_users','=',\Auth::user()->id)->get();
     $evaluadores2=DB::table('evaluadores')->where('id_users','=',\Auth::user()->id)->first();
     $Tipo= TipoDocumento::all();

          //return view('evaluadores.index', ['evaluadores' => $evaluadores]);    

           //dd($proyectos_articulos); 
        return view('home', ['proyectos_articulos' => $proyectos_articulos,'evaluadores' => $evaluadores,'historico' => $historicos,'date' => $date,'Tipo' => $Tipo,'evaluadores2' => $evaluadores2]);
    }


     public function edit(Request $request)
    {
       $name = $request->input('documento');
        $participantesevento=\DB::table('participantesevento')->where('Documento','LIKE',"%$name%")
           ->orderBy('Documento', 'asc')->get();
 
    //dd($participantesevento);

    return view('adminlte::home', ['participantesevento' => $participantesevento]);

    }

     public function update(Request $request, $id)
    {
       $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);
       
        $updates=\DB::table('participantesevento')->where('id',"=",$id)->update($input); 
        return redirect()->route('buscar');
    }


     public function subircalificacion(Request $request, $id)
    {
       //$input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);
        flash('Se adjunto correctamente el archivo de calificación del proyecto!')->important();   
     //dd($request);
       $file= $request->file('calificacion_proyecto');
        dd($file);  

                        $nombre = $file->getClientOriginalName();
                        \Storage::disk('local')->put($nombre, \File::get($file));
                        $rutaimagen="imgplantillas/".$nombre;

                        $proy_pdf = proyectos_articulos::find($id);
                        $proy_pdf->calificacion_proyecto=$rutaimagen;
                         $proy_pdf->save();

       
        //$updates=\DB::table('participantesevento')->where('id',"=",$id)->update($input); 
        return redirect()->route('homedos');
    }


    public function info()
    {
        $evaluadores2 = \App\evaluadores::where('id_users', \Auth::user()->id)->first();
        $Tipo= TipoDocumento::all();

       
         return view('evaluadores.edithome', compact('evaluadores2','Tipo'));
    }

   



}