<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
  protected $table = 'estadoscivil';
  protected $primaryKey = 'idEstadoCivil';
  protected $timestamps = false;
  protected $guarded = [];
}
