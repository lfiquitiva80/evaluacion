<?php

namespace App\Http\Controllers;

use App\plantilla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\eventos_general;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;



class plantillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $plantilla=DB::table('plantilla')->orderBy('id', 'desc')->paginate(15);

 
    //dd($plantilla);
      return view('adminlte::plantilla.index', ['plantilla' => $plantilla]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::plantilla.create');
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

                        $file= $request->file('ImagenInstitucion1');
                        $nombre = $file->getClientOriginalName();
                        Storage::disk('local')->put($nombre, \File::get($file));
                        $rutaimagen="imgplantillas/".$nombre;

                        $file2= $request->file('ImagenInstitucion2');
                        $nombre2 = $file2->getClientOriginalName();
                        Storage::disk('local')->put($nombre2, \File::get($file2));
                        $rutaimagen2="imgplantillas/".$nombre2;

                        $file3= $request->file('ImagenInstitucion3');
                        $nombre3 = $file3->getClientOriginalName();
                        Storage::disk('local')->put($nombre3, \File::get($file3));
                        $rutaimagen3="imgplantillas/".$nombre3;


                    $img = new Plantilla;
                    $img->NombrePlantilla=$input['NombrePlantilla'];
                    $img->Institucion1=$input['Institucion1'];
                    $img->ImagenInstitucion1=$rutaimagen;

                    $img->Institucion2=$input['Institucion2'];
                    $img->ImagenInstitucion2=$rutaimagen2;

                    $img->Institucion3=$input['Institucion3'];
                    $img->ImagenInstitucion3=$rutaimagen3; 

                    $img->Director1=$input['Director1'];     
                    $img->Cargo=$input['Cargo'];
                    $img->InstitucionDirector1=$input['InstitucionDirector1'];

                    $img->Director2=$input['Director2'];     
                    $img->Cargo2=$input['Cargo2'];
                    $img->InstitucionDirector2=$input['InstitucionDirector2'];

                    $img->save();

             //   $plantilla=plantilla::create($input);

               

                   
               

               
    
   // $path = Storage::putFile('avatarrs', $request->file('avatar'));

        //$affected = DB::update('update sires set votes = 100 where name = ?', ['John']);
        //dd($input);
        


        Session::flash('msjevento',"Se ha registrado el Evento "."de manera exitosa!");

        //dd($input);

       return redirect()->route('plantilla.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function show(plantilla $plantilla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $plantilla= plantilla::findOrFail($id);
        //dd($eventosg);
        return view('adminlte::plantilla.edit', compact('plantilla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('plantilla')->where('id',"=",$id)->update($input); 


        return redirect()->route('plantilla.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $destruir=DB::table('plantilla')->where('id', '=', $id)->delete();
       
        return redirect()->route('plantilla.index');
    }
}
