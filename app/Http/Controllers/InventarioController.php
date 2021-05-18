<?php

namespace App\Http\Controllers;

use App\Models\SalidaAlmacen;
use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['inventarios']=Inventario::paginate(5);
        return view('inventario.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $salidaalmacens=SalidaAlmacen::all();
        return view('inventario.create', compact('salidaalmacens'));
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
        $datosInventario = request()->except('_token');
        Inventario::insert($datosInventario);
        return redirect('inventario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $salidaalmacens=SalidaAlmacen::all();
        $inventario=Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario', 'salidaalmacens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosInventario = request()->except('_token', '_method');
        Inventario::where('id', '=', $id)->update($datosInventario);

        $inventario=Inventario::findOrFail($id);
        return redirect('inventario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Inventario::destroy($id);
        return redirect('inventario');
    }
}

    