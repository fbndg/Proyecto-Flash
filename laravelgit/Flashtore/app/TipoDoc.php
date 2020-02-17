<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDoc extends Model
{
  protected $table = 'tiposdoc';
  protected $primaryKey = 'idTipoDoc';
  protected $timestamps = false;
  protected $guarded = [];
}
