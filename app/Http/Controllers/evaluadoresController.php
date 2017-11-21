<?php

namespace App\Http\Controllers;

use App\evaluadores;
use App\TipoDocumento;
use Illuminate\Http\Request;
use App\Http\Requests\evaluadoresRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class evaluadoresController extends Controller
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

           $evaluadores=DB::table('evaluadores')->where('NombreEvaluador','LIKE',"%$name%")
           ->orderBy('id', 'desc')->Paginate(15);

          return view('evaluadores.index', ['evaluadores' => $evaluadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Tipo= TipoDocumento::all();

        return view('evaluadores.create', compact('Tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(evaluadoresRequest $request)
    {



        flash('Se creo un evaluador con Exito!')->success();
        Log::info('El usuario '. \Auth::user()->name .' Creo un nuevo evaluador: '.$request['name']);

        $input = $request->all();
        //dd($input);
        //$eventos_general=evaluadores::create($input);

        //Session::flash('msjevento',"Se ha registrado el Area Tematica ".$eventos_general->id." de manera exitosa!");

         $input = $request->all();

        


                               

                        if ($request->hasFile('HV')) {
                            $patch1= 'documentos/'.$request->file('HV')->store('documentos');
                            
                        }
                        else
                        {
                          $patch1= "";      
                        }


                        if ($request->hasFile('Cedula_pdf')) {
                            $patch2 = 'documentos/'.$request->file('Cedula_pdf')->store('documentos');
                        }
                         else
                        {
                          $patch2= "";      
                        }


                        if ($request->hasFile('Certificado_Bancario')) {    
                            $patch3 = 'documentos/'.$request->file('Certificado_Bancario')->store('documentos');
                        }
                         else
                        {
                          $patch3= "";      
                        }

                        if ($request->hasFile('cuentacobro')) {  
                            $patch4 = 'documentos/'.$request->file('cuentacobro')->store('documentos');
                         }
                          else
                        {
                          $patch4= "";       
                        }

                        if ($request->hasFile('Rut')) {       
                            $patch5 = 'documentos/'.$request->file('Rut')->store('documentos');
                        }
                         else
                        {
                          $patch5= "";      
                        }

                        if ($request->hasFile('FirmaDigital')) {       
                            $patch6 = 'documentos/'.$request->file('FirmaDigital')->store('documentos');
                        }
                         else
                        {
                          $patch6= "";
                        }

                    $documentos = new evaluadores;
                    $documentos->id_users=$request->input('id_users');
                    $documentos->NombreEvaluador=$request->input('NombreEvaluador');
                    $documentos->Cedula=$request->input('Cedula');
                    $documentos->Telefono=$request->input('Telefono');
                    $documentos->Direccion=$request->input('Direccion');
                    $documentos->email=$request->input('email');
                    $documentos->Codigo_postal=$request->input('Codigo_postal');
                    $documentos->HV=$patch1;
                    $documentos->Cedula_pdf=$patch2;
                    $documentos->Certificado_Bancario=$patch3;
                    $documentos->cuentacobro=$patch4;
                    $documentos->Rut=$patch5;
                    $documentos->FirmaDigital=$patch6;
                    $documentos->TipoDocumento=$request->input('TipoDocumento');
                    $documentos->Ciudad_expedicion=$request->input('Ciudad_expedicion');

                    $documentos->save();

        

       return redirect()->route('evaluadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\evaluadores  $evaluadores
     * @return \Illuminate\Http\Response
     */
    public function show(evaluadores $evaluadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\evaluadores  $evaluadores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $evaluadores= evaluadores::findOrFail($id);
         $Tipo= TipoDocumento::all();
         Log::info('El usuario '. \Auth::user()->name .' Se mostro la edición para el Id: '.$evaluadores);
        //dd($eventosg);
        return view('evaluadores.edit', compact('evaluadores','Tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\evaluadores  $evaluadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        flash('Se actualizo el registro!')->success();
        Log::info('El usuario '. \Auth::user()->name .' Actualizo el id: '.$id);
        //$input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);
        //dd($input);
        $evaluadoresreg=\App\evaluadores::find($id);

                               

                        if ($request->hasFile('HV')) {
                            $patch1= 'documentos/'.$request->file('HV')->store('documentos');
                            
                        }
                        else
                        {
                          $patch1= $evaluadoresreg->HV;      
                        }


                        if ($request->hasFile('Cedula_pdf')) {
                            $patch2 = 'documentos/'.$request->file('Cedula_pdf')->store('documentos');
                        }
                         else
                        {
                          $patch2= $evaluadoresreg->Cedula_pdf;      
                        }


                        if ($request->hasFile('Certificado_Bancario')) {    
                            $patch3 = 'documentos/'.$request->file('Certificado_Bancario')->store('documentos');
                        }
                         else
                        {
                          $patch3= $evaluadoresreg->Certificado_Bancario;      
                        }

                        if ($request->hasFile('cuentacobro')) {  
                            $patch4 = 'documentos/'.$request->file('cuentacobro')->store('documentos');
                         }
                          else
                        {
                          $patch4= $evaluadoresreg->cuentacobro;       
                        }

                        if ($request->hasFile('Rut')) {       
                            $patch5 = 'documentos/'.$request->file('Rut')->store('documentos');
                        }
                         else
                        {
                          $patch5= $evaluadoresreg->Rut;      
                        }

                        if ($request->hasFile('FirmaDigital')) {       
                            $patch6 = 'documentos/'.$request->file('FirmaDigital')->store('documentos');
                        }
                         else
                        {
                          $patch6= $evaluadoresreg->FirmaDigital;
                        }
        

        //$updates=DB::table('evaluadores')->where('id',"=",$id)->update($input); 
        $updates=DB::table('evaluadores')->where('id',"=",$id)->update(['NombreEvaluador' => $request->input ('NombreEvaluador'),'id_users' => $request->input ('id_users'),'Cedula' => $request->input ('Cedula'),'Telefono' => $request->input ('Telefono'),'Direccion' => $request->input ('Direccion'),'email' => $request->input ('email'),'Codigo_postal' => $request->input ('Codigo_postal'),'TipoDocumento' => $request->input ('TipoDocumento'),'Ciudad_expedicion' => $request->input ('Ciudad_expedicion')]);


      

                           $evaluadores = \App\evaluadores::find($id);

                           $evaluadores->HV= $patch1;
                           $evaluadores->Cedula_pdf=$patch2;
                           $evaluadores->Certificado_Bancario=$patch3;
                           $evaluadores->cuentacobro=$patch4;
                           $evaluadores->Rut=$patch5;
                           $evaluadores->FirmaDigital=$patch6;
                           $evaluadores->save();    



                    


                           
                      

         if (\Auth::user()->TipoUsers==0){
         return redirect()->route('homedos');
         }
        else{
            return redirect()->route('evaluadores.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\evaluadores  $evaluadores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        flash('Se actualizo el registro!')->warning();
        Log::warning('El usuario '. \Auth::user()->name .' Elimino el id: '.$id);     
        $destruir=DB::table('evaluadores')->where('id', '=', $id)->delete();
        return redirect()->route('evaluadores.index');
    }

   

     public function perfil()
    {
        $evaluadores=DB::table('evaluadores')->where('id_users','=',\Auth::user()->id)->first();
       

        //$evaluadores= evaluadores::findOrFail($id);
         Log::info('El usuario '. \Auth::user()->name .' ingreso al setting el Id:');
        
        return view('evaluadores.settings', compact('evaluadores'));
    }

}
