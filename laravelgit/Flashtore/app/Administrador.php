<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
  protected $table = 'administradores';
  protected $primaryKey = 'idAdmin';
  protected $timestamps = false;
  protected $guarded = [];
}
