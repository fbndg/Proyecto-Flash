<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaEnvio extends Model
{
  protected $table = 'formasenvio';
  protected $primaryKey = 'idFormaEnvio';
  protected $timestamps = false;
  protected $guarded = [];
}
