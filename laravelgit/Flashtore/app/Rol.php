<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
  protected $table = 'roles';
  protected $primaryKey = 'idRol';
  protected $timestamps = false;
  protected $guarded = [];
}
