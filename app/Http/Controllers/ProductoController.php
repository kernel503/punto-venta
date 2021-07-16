<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteProductoRequest;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
        Producto::create($request->validated());
        return response()->json(['message' => 'Producto agregado']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductoRequest $request)
    {
        $data = $request->validated();
        Producto::where(['id' => Arr::get($data, 'id')])
            ->update(Arr::except($data, 'id'));
        return response()->json(['message' => 'Producto actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteProductoRequest $request)
    {
        Producto::find(Arr::get($request->validated(), 'id'))->delete();
        return response()->json(['message' => 'Producto eliminado']);
    }
}
