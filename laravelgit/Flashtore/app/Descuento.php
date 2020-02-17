<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
  protected $table = 'descuentos';
  protected $primaryKey = 'iDescuento';
  protected $timestamps = false;
  protected $guarded = [];
}
