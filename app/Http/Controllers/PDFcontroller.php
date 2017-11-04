<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\eventos_general;
use App\proyectos_articulos;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use PDF;
use App\participantesevento;
use App\evaluacion_par;

class PDFcontroller extends Controller
{
    
	 public function index()

    {
    	$data=participantesevento::all();

        $pdf = PDF::loadView('adminlte::excel.xlsxparticipantes', ['products' => $data]);
		return $pdf->download('invoice.pdf');

    }

     
    public function Certificado($id)

    {
        $preguntas=DB::table('criterios_evaluacion')->where('id_proyectos_articulos',"=",$id)->get(); 
        $proyectos_articulos= proyectos_articulos::find($id);

        
        $pdf = PDF::loadView('pdf.pdfdos', compact('preguntas','proyectos_articulos','id'));
       

        return $pdf->setPaper('a4', 'landscape')->setOptions(['defaultFont' => 'Helvetica'])->stream($id);
        
        //Storage::disk('local')->put($id, \File::get($pdf));
         
                        

    }

     public function Certificado2($id)

    {
        $preguntas=DB::table('criterios_evaluacion')->where('id_proyectos_articulos',"=",$id)->get(); 
        $proyectos_articulos= proyectos_articulos::find($id);
        $evaluadores=DB::table('evaluadores')->where('id_users',"=",\Auth::user()->id)->first();

        
        $pdf = PDF::loadView('pdf.pdftres', compact('preguntas','proyectos_articulos','id','evaluadores'));
       

        return $pdf->setPaper('a4', 'portrait')->setOptions(['defaultFont' => 'Helvetica'])->stream($id);
        
        //Storage::disk('local')->put($id, \File::get($pdf));
         
                        

    }

}
