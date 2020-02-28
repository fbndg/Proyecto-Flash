<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{

    protected $table = 'detallesfactura';
    protected $primaryKey = 'iDetalleFactura';
    protected $timestamps = false;
    protected $guarded = [];

    public function producto() {
      return $this->belongsTo("App\Producto", "idProducto");
    }

    public function descuento() {
      return $this->belongsTo("App\Descuento", "idDescuento");
    }

}
