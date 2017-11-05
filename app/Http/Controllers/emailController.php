<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\email as correo;
use App\Mail\envio;
use App\Mail\certificadoypago;
use App\Mail\invitacion;
use App\Mail\aceptacion;
use App\Mail\finalencuesta;
use App\Mail\pagos;
use App\Mail\documentos;
use App\Mail\norespuesta;
//use App\Mail;
use App\Mail\partevento as part;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Mail\Mailer;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\messaje;
use App\participantesevento;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;







class emailController extends Controller
{
    
      public function index(Request $request)
        {

        //dd($request);	
       //\Mail::to($Request->get('de'))->cc($Request->get('para'))->send(new emails);

          $data = $request->all();

          $idcorreo=$request->get('idcorreo');
     
           //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
           \Mail::send('adminlte::emails.notificacion',$data, function($message) use ($request)
            {
           

               //remitente
               $message->from($request->get('para'));
               $message->cc($request->get('cc'));
               //asunto
               $message->subject($request->get('asunto'));
               //receptor
               $message->to($request->get('de'), env('CONTACT_NAME'));
           });
     

        //to va el usuario conectado en session

        Session::flash('msjevento',"Se ha enviado el correo de manera exitosa!");

        return view('adminlte::Principal');
           return view('adminlte::emails.notificacion', ['idcorreo' => $idcorreo]);
           
        }


        public function edit($id)
        {
         $idcorreo=$id;
            //dd($eventosg);
         return view('adminlte::emails.enviar', compact('idcorreo'));

       }


       public function editmailsparticipantes($id)
        {
         
         $idcorreo= participantesevento::findOrFail($id);

          //dd($idcorreo);


            //dd($eventosg);
         return view('adminlte::emails.emailparticipantes', compact('idcorreo','id'));

       }


     public function enviarcorreo(Request $request, $id)
         { 
             $order = participantesevento::findOrFail($id);
             //dd($order);

        // Ship order...

        \Mail::to($request->get('para'))->send(new part($order));

         return redirect()->route('participantesevento.index');
        }



      public function invitar($id)
         { 
             //$order = participantesevento::findOrFail($id);
             //dd($order);

        // Ship order...


        
          flash('Haz enviado un correo de invitacion!')->success();
          Log::info('El usuario '. \Auth::user()->name .' Envio un correo de Invitacion del id: '.$id);

        $invitacion = \App\proyectos_articulos::find($id);
        //dd($invitacion);
        $invitacion->correo_invitacion=1;
        $date = Carbon::now();
        $invitacion->Fecha_Envio_a_Evaluador=$date;


        $invitacion->save();

       $correo=\App\evaluadores::find($invitacion->id_evaluador);
       $correo2=\App\User::find($correo->id_users);  
         
        \Mail::to($correo2->email)->send(new invitacion($invitacion));

       
        //$url="http://ocyt.org.co/";

         return redirect()->route('comunicados.index');
        }


        public function aceptacion($id)
         { 
             //$order = participantesevento::findOrFail($id);
             //dd($order);

        // Ship order...


        
          flash('Haz enviado un correo de invitacion!')->success();
          Log::info('El usuario Envio un correo de Aceptacion del id'.$id);

        $invitacion = \App\proyectos_articulos::find($id);
        //dd($invitacion);
        $invitacion->Aceptacion=1;
        $date = Carbon::now();
        $invitacion->Fecha_Aceptacion=$date;

        $invitacion->save();

       $correo=\App\evaluadores::find($invitacion->id_evaluador);
       $correo2=\App\User::find($correo->id_users);  
         
        \Mail::to($correo2->email)->send(new aceptacion($invitacion));

       

        $url="http://ocyt.org.co/";
         //return redirect()->route('comunicados.index');
        return \Redirect::to($url);
        }



     public function documentos($id)
         { 
             //$order = participantesevento::findOrFail($id);
             //dd($order);

        // Ship order...
          flash('Haz enviado un correo para solicitar Documentos!')->success();
          Log::info('El usuario '. \Auth::user()->name .' Envio un correo de Documentos del id: '.$id);

        $invitacion = \App\proyectos_articulos::find($id);

        $invitacion->correo_documentos=1;

        $invitacion->save();

          $correo=\App\evaluadores::find($invitacion->id_evaluador);
          $correo2=\App\User::find($correo->id_users);  

          //\Notification::send('lfiquitiva@ocyt.org.co', new documentos());
        \Mail::to($correo2->email)->send(new documentos($invitacion));

        



         return redirect()->route('comunicados.index');
        }


         public function pagos($id)
         { 
             //$order = participantesevento::findOrFail($id);
             //dd($order);
              Log::info('El usuario '. \Auth::user()->name .' Envio un correo de Pagos del id: '.$id);


              $invitacion = \App\proyectos_articulos::find($id);
              $invitacion->correo_pago=1;
              $invitacion->save();
              $correo=\App\evaluadores::find($invitacion->id_evaluador);
              $correo2=\App\User::find($correo->id_users);  

          flash('Haz enviado un correo para pagos!')->success();
        // Ship order...
         
        \Mail::to($correo2->email)->send(new pagos($invitacion));

       

         return redirect()->route('comunicados.index');
        } 


         public function certificadoypago($id)
         { 
             //$order = participantesevento::findOrFail($id);
             //dd($order);
              Log::info('El usuario '. \Auth::user()->name .' Envio un correo de Certificado y Pagos del id: '.$id);


              $invitacion = \App\proyectos_articulos::find($id);
              $invitacion->certificadoypago=1;
              $invitacion->save();
              $correo=\App\evaluadores::find($invitacion->id_evaluador);
              $correo2=\App\User::find($correo->id_users);  

          flash('Haz enviado un correo de certificado y pago!')->success();
        // Ship order...
         
        \Mail::to($correo2->email)->send(new certificadoypago($invitacion));

       

         return redirect()->route('comunicados.index');
        } 


         public function norespuesta($id)
         { 
             //$order = participantesevento::findOrFail($id);
             //dd($order);

        // Ship order...

          flash('Haz enviado un correo para la No respuesta!')->success();
          Log::info('El usuario  Envio un correo de No respuesta del id: '.$id);

        $invitacion = \App\proyectos_articulos::find($id);

        $invitacion->correo_norespuesta=1;

        $invitacion->save();

        $correo=\App\evaluadores::find($invitacion->id_evaluador);
              $correo2=\App\User::find($correo->id_users);

        \Mail::to($correo2->email)->send(new norespuesta($invitacion));

        $url="http://ocyt.org.co/";
        //return back();
        //return redirect()->route('comunicados.index');
        return \Redirect::to($url);
        }



                 public function finalevaluacion($id)
         { 
            

          flash('Haz enviado un correo para la finalizacion de la evaluación!')->success();

          Log::info('El usuario '. \Auth::user()->name .' Envio un correo de Finalizacion del id: '.$id);

          $invitacion = \App\proyectos_articulos::find($id);
          $invitacion->proyecto_completado=1;
          $date = Carbon::now();
          $invitacion->Fecha_Devolucion_Evaluador=$date;

          //dd($invitacion);
          $invitacion->save();

        $correo=\App\evaluadores::find($invitacion->id_evaluador);
              $correo2=\App\User::find($correo->id_users);

        \Mail::to($correo2->email)->send(new finalencuesta($invitacion));

        //return back();
        //return redirect()->route('/home');

       return redirect()->route('homedos');
    }      

        
     public function enviarparticipantes(Request $request)
         { 
              //dd($request); 
       //\Mail::to($Request->get('de'))->cc($Request->get('para'))->send(new emails);

         $data = $request->all();
          $datos = $request->get('cuerpocorreo');

          

          //dd($data);
           //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
           \Mail::send('adminlte::emails.notificacion2',$data, function($message) use ($request)
           {
               //remitente
               $message->from($request->get('para'));
               $message->cc($request->get('cc'));

               //asunto
               $message->subject($request->get('asunto'));

               //receptor
               $message->to('foo@example.com', env('CONTACT_NAME'));
           });
     

        //to va el usuario conectado en session
        //dd($datos);
        //Session::flash('msjevento',"Se ha enviado el correo de manera exitosa!");

        return redirect()->route('participantesevento.index');   
        return view('adminlte::emails.notificacion2', ['datos' => $datos]);


        //return view('adminlte::participantesevento.index');

             //$data = $request->all();


            // Ship order...

         /*   Mail::to('eventos@ocyt.org.co')->cc($request->cc)
                  ->send(new correo());


            */
             

        }

        #envia el correo del participantes.
        public function partevento(Request $request, $id)
        {

        $order = Order::findOrFail($id);
        //  $order = $request;

        // Ship order...

        Mail::to($request->user())->send(new OrderShipped($order));

        return redirect()->route('participantesevento.index');

        }


        
         






  }   





 