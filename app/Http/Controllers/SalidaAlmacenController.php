<?php

namespace App\Http\Controllers;

use App\Models\almacen;
use App\Models\SalidaAlmacen;
use Illuminate\Http\Request;

class SalidaAlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['salidas']=SalidaAlmacen::paginate(5);

        return view('salida_almacen.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $almacens=almacen::all();
        return view('salida_almacen.create', compact('almacens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosSalidaAlmacen=request()->all();

        $datosSalidaAlmacen=request()->except('_token');

        SalidaAlmacen::insert($datosSalidaAlmacen);

        //return response()->json($datosSalidaAlmacen);
        return redirect('salida_almacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(SalidaAlmacen $salidaAlmacen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salida = SalidaAlmacen::findOrFail($id);

        $almacens=almacen::all();

        return view('salida_almacen.edit',compact('salida', 'almacens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosSalidaAlmacen=request()->except(['_token','_method']);
        SalidaAlmacen::where('id', '=', $id)->update($datosSalidaAlmacen);

        $almacens=almacen::all();
        $salida = SalidaAlmacen::findOrFail($id);
        return view('salida_almacen.edit',compact('salida', 'almacens'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SalidaAlmacen::destroy($id);

        return redirect('salida_almacen');
    }
}
