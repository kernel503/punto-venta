<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'producto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['img_url', 'nombre', 'grupo_inventario', 'descripcion'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Obtiene detalle del producto.
     */
    public function detalle_producto()
    {
        return $this->hasMany(DetalleProducto::class, 'producto_id', 'id');
    }
}
