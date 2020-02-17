<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';
    protected $primaryKey = 'idProvincia';
    protected $timestamps = false;
    protected $guarded = [];
}
