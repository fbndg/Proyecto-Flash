<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
  protected $table = 'facturas';
  protected $primaryKey = 'idFactura';
  //protected $timestamps = false;
  protected $guarded = [];
}
