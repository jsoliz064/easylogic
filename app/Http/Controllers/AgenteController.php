<?php

namespace App\Http\Controllers;

use App\Models\Agente;
use App\Models\Ciudad;
use Illuminate\Http\Request;

class AgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agentes=Agente::all();
      
        return view('agentes.index',compact('agentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudads =Ciudad::all();
        return view('agentes.create',compact('ciudads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set("America/La_Paz");
        $request->validate([
            'url'=>'required|image|max:10000'
        ]);
        //guardar archivo en storage
       /*  $imagenes=$request->file('url')->store('public/personas');
        $url=Storage::url($imagenes); */

        $path = 'images/agentes/';
        $nombre="";
        $img1path = $path .  $_FILES['url']['name'];
        if(move_uploaded_file($_FILES['url']['tmp_name'], $img1path))
        {
            $nombre = $_FILES['url']['name'];
        }
        $url=$path . $nombre;

        $agentes=Agente::create([
            'id_ciudad'=>request('id_ciudad'),
            'nombre'=>request('nombre'),
            'telefono'=>request('telefono'),
            'email'=>request('email'),
            'url'=>$url,
        ]);
        return redirect()->route('agentes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function show(Agente $agente)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function edit(Agente $agente)
    {
        $ciudads =Ciudad::all();
        return view('agentes.edit',compact('agente','ciudads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agente $agente)
    {
        date_default_timezone_set("America/La_Paz");
        if ($request->url!==null){
            //valida que cumpla las condiciones sgtes
            $request->validate([
                'url'=>'required|image|max:10000'
            ]);
            //borrar anterior imagen
            $url = $agente->url;
            if (file_exists($url)){
                unlink($url);
            }
            //sube la nueva imagen
            $path = 'images/agentes/';
            $nombre="";
            $img1path = $path .  $_FILES['url']['name'];
            if(move_uploaded_file($_FILES['url']['tmp_name'], $img1path))
            {
                $nombre = $_FILES['url']['name'];
            }
            $url=$path . $nombre;
            $agente->url=$url;
        }
        $agente->id_ciudad=$request->id_ciudad;
        $agente->nombre=$request->nombre;
        $agente->telefono=$request->telefono;
        $agente->email=$request->email;
        $agente->save();
        return redirect()->route('agentes.edit',compact('agente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agente $agente)
    {
        $ruta = $agente->url;
        if (file_exists($ruta)){
            unlink($ruta);
        }
        $agente->delete();
        return redirect()->route('agentes.index');
    
    }
}
