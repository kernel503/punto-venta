<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetalleProductoCollection extends JsonResource
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
            'precio_unitario' => $this->precio_unitario,
            'cantidad_disponible' => $this->cantidad_disponible,
            'detalle' => $this->detalle,
            'ubicacion' => $this->ubicacion,
            'valor_neto' => $this->precio_unitario * $this->cantidad_disponible,
        ];
    }
}
