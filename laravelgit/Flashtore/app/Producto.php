<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'idProducto';
    //protected $timestamps = false;
    protected $guarded = [];


}
