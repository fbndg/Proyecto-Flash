<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = 'modelos';
    protected $primaryKey = 'idModelo';
    protected $timestamps = false;
    protected $guarded = [];
}
