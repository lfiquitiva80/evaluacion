<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
 use Illuminate\Database\Eloquent\Model;


class principalController extends Controller
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
      $query=$request->get('consulta1');

      //dd($query);
     // $eventos=\DB::table('eventos_general')->where('NombredelEvento',$request->get('consulta1'));

 
// dd($eventos);
       return view('adminlte::Inicio.Index', ['qry' => $query]);


        //return view('Inicio.index');
    }

   
      public function create(Request $request) 
    {
      $depa=$request->input('dato');
      //dd($depa);
      $municipios = \DB::table('municipios')->where('Codigo_Departamento',$depa)->get();
      //dd($depa);
       //dd($request->param1);
     return view('adminlte::Inicio.create', ['municipios' => $municipios]);
    }

      public function participantes()
    {
        return view('adminlte::Inicio.integrantes');
    }

      public function ticket()
    {
        return view('adminlte::Inicio.tiquetes');
    }

      public function atematica()
    {
        return view('adminlte::Inicio.tematica');
    }
        public function email()
    {
        return view('adminlte::emails.enviar');
    }

        public function info()
    {
        return view('adminlte::Inicio.infogeneral');
    }

       public function indexinicio()
    {
        return view('adminlte::Inicio.index');
    }

      public function indexall()
    {
        return view('adminlte::Inicio.todos');
    }


        
}
