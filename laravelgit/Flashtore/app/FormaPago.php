<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
  protected $table = 'formasPago';
  protected $primaryKey = 'idFormaPago';
  protected $timestamps = false;
  protected $guarded = [];
}
