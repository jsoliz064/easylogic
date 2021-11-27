<?php

namespace App\Http\Controllers;

use App\Models\Tipotransporte;
use Illuminate\Http\Request;

class TipotransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipotransportes=Tipotransporte::all();
        return view('tipotransporte.index',compact('tipotransportes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipotransporte.create');
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
        $tipotransportes=Tipotransporte::create([
            'nombre'=>request('nombre'),
        ]);
        return redirect()->route('tipotransportes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipotransporte  $tipotransporte
     * @return \Illuminate\Http\Response
     */
    public function show(Tipotransporte $tipotransporte)
    {
        return view('tipotransporte.show',compact ('tipotransporte'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipotransporte  $tipotransporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipotransporte $tipotransporte)
    {
        return view('tipotransporte.edit',compact('tipotransporte'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipotransporte  $tipotransporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipotransporte $tipotransporte)
    {
        date_default_timezone_set("America/La_Paz");
        $tipotransporte->nombre=$request->nombre;
        $tipotransporte->save();

        return redirect()->route('tipotransportes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipotransporte  $tipotransporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipotransporte $tipotransporte)
    {
        $tipotransporte->delete();
        return redirect()->route('tipotransportes.index');
    }
}
