<?php

namespace App\Http\Controllers;

use App\User;
use App\evaluadores;
Use App\Validator;
use App\Events\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\requestbase\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Notifications\notificacionadmin;
use Faker\factory as Faker;





class usuariosController extends Controller



{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {

        $name = $request->input('namefuncionario');

    // dd($name);

           $usuarios=DB::table('users')->where('Name','LIKE',"%$name%")
           ->orderBy('Name', 'asc')->Paginate(15);
           
           

            return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
       //dd($input);

        flash('Se creo con Exito!')->important();
       Log::info('El usuario '. \Auth::user()->name .' Creo un nuevo usuario: '.$request['name']);
        

         $input = [
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => bcrypt($request['password']),
            'TipoUsers' => $request['TipoUsers'],
            ];

            //$leonidas = $faker->password;
        

        $criterios_evaluacion=User::create($input);
        //dd($criterios_evaluacion);

         /*$input2 = [
            'NombreEvaluador'=> $request['name'],
            'email'    => $request['email'],
            'id_users' => $criterios_evaluacion->id,
        ];


        $evaluador=evaluadores::create($input2);   */ 

        event(new OrderShipped($criterios_evaluacion));

       return redirect()->route('usuarios.index');


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
            $usuarios= User::findOrFail($id);
            //$users= DB::table('users')->get();
            //$usuarios->notify(new notificacionadmin($usuarios));
            Log::info('El usuario '. \Auth::user()->name .' Se mostro la edición para el Id: '.$usuarios);
            
          //\Notification::send($users, new notificacionadmin($usuarios));
         
        return view('usuarios.edit', compact('usuarios'));
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
        //sires::update($input);
        //sires::find($id)->update($input);

         $input = [
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => bcrypt($request['password']),
            'TipoUsers' => $request['TipoUsers'],
        ];

        
        $updates=DB::table('users')->where('id',"=",$id)->update($input); 


        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        flash('Se elimino el registro!'.$id)->warning();
        Log::warning('El usuario '. \Auth::user()->name .' Elimino el id: '.$id);    
        $destruir=DB::table('users')->where('id', '=', $id)->delete();
        return redirect()->route('usuarios.index');
    }
}
