<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
  protected $table = 'imagenes';
  protected $primaryKey = 'idImagen';
  protected $timestamps = false;
  protected $guarded = [];
}
