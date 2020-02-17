<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
  protected $table = 'detallesfactura';
  protected $primaryKey = 'iDetalleFactura';
  protected $timestamps = false;
  protected $guarded = [];
}
