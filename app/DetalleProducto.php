<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleProducto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'detalle_producto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_id', 'precio_unitario', 'cantidad_disponible', 'detalle', 'ubicacion'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    // /**
    //  * Obtiene los detalle del producto.
    //  */
    // public function detalle_producto()
    // {
    //     return $this->hasMany(DetalleProducto::class, 'producto_id', 'id');
    // }
}
