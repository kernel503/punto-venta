<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'img_url' => $this->img_url,
            'nombre' => $this->nombre,
            'grupo_inventario' => $this->grupo_inventario,
            'descripcion' => $this->descripcion,
            'opciones' => DetalleProductoCollection::collection($this->detalle_producto)
        ];
    }
}
