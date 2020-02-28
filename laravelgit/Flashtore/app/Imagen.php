<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
  
    protected $table = 'imagenes';
    protected $primaryKey = 'idImagen';
    public $timestamps = false;
    protected $guarded = [];

}
