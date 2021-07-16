<?php

namespace App\Http\Controllers;

use App\DetalleProducto;
use App\Http\Requests\DeleteDetalleProductoRequest;
use App\Http\Requests\PostDetalleProductoRequest;
use App\Http\Requests\PutDetalleProductoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DetalleProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostDetalleProductoRequest $request)
    {
        DetalleProducto::create($request->validated());
        return response()->json(['message' => 'Detalle del Producto agregado']);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleProducto  $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function update(PutDetalleProductoRequest $request)
    {
        $data = $request->validated();
        DetalleProducto::where(['id' => Arr::get($data, 'id')])
            ->update(Arr::except($data, 'id'));
        return response()->json(['message' => 'Detalle del Producto actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleProducto  $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteDetalleProductoRequest $request)
    {
        DetalleProducto::find(Arr::get($request->validated(), 'id'))->delete();
        return response()->json(['message' => 'Detalle del Producto eliminado']);
    }
}
