<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
  protected $table = 'localidades';
  protected $primaryKey = 'idLocalidad';
  protected $timestamps = false;
  protected $guarded = [];
}
