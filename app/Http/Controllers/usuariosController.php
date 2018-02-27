<?php

namespace App\Http\Controllers;

use App\User;
use App\evaluadores;
use App\tratamiento_carta;
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
           ->orderBy('id', 'desc')->Paginate(15);
           
           

            return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $cartas = tratamiento_carta::all();
       //dd($cartas); 
       return view('usuarios.create', ['cartas' => $cartas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // $data = $request->all();
       //dd($input);


        $this->validate($request,[
            'name'     => 'required|max:255',
            'username' => 'sometimes|required|max:255|unique:users',
            'email'    => 'required|email|max:255|unique:users',
            //'password' => 'required|min:6|confirmed',
            
        ]);

        flash('Se creo con Exito!')->important();
       Log::info('El usuario '. \Auth::user()->name .' Creo un nuevo usuario: '.$request['name']);
            $hashed_random_password = str_random(8);
            //dd($hashed_random_password);

         $input = [
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => bcrypt($hashed_random_password),
            'passworddos' => \Crypt::encrypt($hashed_random_password),
            'TipoUsers' => $request['TipoUsers'],
            'id_tratamiento' => $request['id_tratamiento'],
            ];

            //$leonidas = $faker->password;
        

        $createuser=User::create($input);
        //dd($criterios_evaluacion);

         $input2 = [
            'NombreEvaluador'=> $request['name'],
            'email'    => $request['email'],
            'id_users' => $createuser->id,
        ];

        $evaluador=evaluadores::create($input2);   

        //event(new OrderShipped($criterios_evaluacion));
       

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
            //dd(\Crypt::decrypt($usuarios->passworddos));

            $cartas = tratamiento_carta::all();
            //$users= DB::table('users')->get();
            //$usuarios->notify(new notificacionadmin($usuarios));
            Log::info('El usuario '. \Auth::user()->name .' Se mostro la edición para el Id: '.$usuarios);
            
          //\Notification::send($users, new notificacionadmin($usuarios));
         
        return view('usuarios.edit', compact('usuarios','cartas'));
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
            'passworddos' => \Crypt::encrypt($request['password']),
            'TipoUsers' => $request['TipoUsers'],
            'id_tratamiento' => $request['id_tratamiento'],
        ];
        
        $updates=DB::table('users')->where('id',"=",$id)->update($input); 

        $input2 = [
            'NombreEvaluador'=> $request['name'],
            'email'    => $request['email'],
            
        ];

        $updates=DB::table('evaluadores')->where('id_users',"=",$id)->update($input2);   


        if (\Auth::user()->TipoUsers==0){
         return redirect()->route('homedos');
         }
        else{
            return redirect()->route('usuarios.index');
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
        

        try
        {
            
             
            $destruir=DB::table('users')->where('id', '=', $id)->delete();
            flash('Se elimino el registro!'.$id)->warning();
            Log::warning('El usuario '. \Auth::user()->name .' Elimino el id: '.$id);   
        }
        catch(\Exception $e)
        {
            //$var_error=$e->get_message();
            flash('No puedes eliminar, porque esta creado el evaluador')->error();
        }    


        return redirect()->route('usuarios.index');
    }


    public function configuracionemail(Request $request)
    {
        $input = $request->all();
        //dd($data);
                        //$usuarios=DB::table('users')->get();
                        //$configuracion=evaluadores::update($data);

                            $configuracion = DB::table('users')->get();

                       foreach ($configuracion as $key => $value) {
                           $datos = DB::table('users')->where('id', '=', $value->id)->update($input);
                       }
                       
                             
                           

                      
                     
       return back();             

    }



}
