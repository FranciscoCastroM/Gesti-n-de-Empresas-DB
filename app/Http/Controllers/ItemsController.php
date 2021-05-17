<?php

namespace App\Http\Controllers;

use App\Models\orden;
use App\Models\Factura;
use App\Models\items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['items']=Items::paginate(5);
        return view('items.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ordens=orden::all();
        $facturas=Factura::all();
        return view('items.create', compact('ordens', 'facturas'));
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
        $datosItems = request()->except('_token');
        Items::insert($datosItems);
        return redirect('items');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item=Items::findOrFail($id);
        $ordens=orden::all();
        $facturas=Factura::all();
        return view('items.edit', compact('item', 'ordens', 'facturas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosItems = request()->except(['_token','_method']);
        Items::where('id','=',$id)->update($datosItems);
       
        $ordens=orden::all();
        $facturas=Factura::all();
        $item=Items::findOrFail($id);
        return view('items.edit', compact('item','ordens','facturas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Items::destroy($id);
        return redirect('items');
    }
}
