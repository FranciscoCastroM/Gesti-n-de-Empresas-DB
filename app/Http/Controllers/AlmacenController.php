<?php

namespace App\Http\Controllers;

use App\Models\almacen;
use App\Models\Factura;
use App\Models\SalidaAlmacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $salidaA = SalidaAlmacen::all();
        $factura = Factura::all();


        $datos = array('almacens'=> $factura,
                        'almacenSalida'=>$salidaA);

        

        return view('almacen.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('almacen.create');
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
        $campos=[
            'salidasA' => 'required|date',
            'facturaS' => 'required|string'
        ];            
        $mensaje=[
            'required'=>'El :attribute es requerido ',
        ];
        $this->validate($request,$campos,$mensaje);

        $datoAlmacen = request()->except("_token");
        almacen::insert($datoAlmacen);
        return redirect('almacen')->with('mensaje','dato agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function show(almacen $almacen)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
        $almacen=almacen::findOrfail($id);
        return view('almacen.edit' ,compact('almacen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'salidasA' => 'required|date',
            'facturaS' => 'required|string'
        ];            
        $mensaje=[
            'required'=>'El :attribute es requerido ',
        ];
        $this->validate($request,$campos,$mensaje);

        $datoAlmacen = request()->except(['_token','_method']);
        almacen::where('id','=',$id)->update($datoAlmacen);

        $almacen=almacen::findOrfail($id);
        return redirect('almacen')->with('mensaje','dato editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        almacen::destroy($id);
        return redirect('almacen');
    }
}
