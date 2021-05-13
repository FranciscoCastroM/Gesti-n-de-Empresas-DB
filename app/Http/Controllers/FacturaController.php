<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['facturas']=Factura::paginate(5);
        return view('factura.indexfactura',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('factura.create');
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
            'NumeroEntrada' => 'required|string|max:60',
            'Fecha' => 'required|date',            
            'NumFactura' => 'required|string|max:60',   
            'Proveedor' => 'required|string|max:60',           
            'TotalBienes' => 'required|string|max:60',
            'ValorTotal' => 'required|string|max:60'

        ];
        $mensaje=[
            'required'=>'El :attribute es requerido ',
            'Fecha.required'=>'La Fecha es requerida'// esto si la fecha
        ];
        $this->validate($request,$campos,$mensaje);


        $datoFactura = request()->except("_token");
        Factura::insert($datoFactura);
        return redirect('factura')->with('mensaje','factura agregada con exito');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $factura=Factura::findOrfail($id);
        return view('factura.edit',compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos=[
            'NumeroEntrada' => 'required|string|max:60',
            'Fecha' => 'required|date',            
            'NumFactura' => 'required|string|max:60',   
            'Proveedor' => 'required|string|max:60',           
            'TotalBienes' => 'required|string|max:60',
            'ValorTotal' => 'required|string|max:60'


        ];
        $mensaje=[
            'required'=>'El :attribute es requerido ',
            'Fecha.required'=>'La Fecha es requerida'// esto si la fecha
        ];
        $this->validate($request,$campos,$mensaje);


        $datoFactura = request()->except(['_token','_method']);
        Factura::where('id','=',$id)->update($datoFactura);

        $factura=Factura::findOrfail($id);
        return redirect('factura')->with('mensaje','La Factura modificado con exito');

      
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Factura::destroy($id);
        return redirect('factura');
    }
}
