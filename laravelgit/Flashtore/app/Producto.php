<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $table = 'productos';
    protected $primaryKey = 'idProducto';
    //protected $timestamps = true;
    protected $guarded = [];

    public function imagen() {
      return $this->belongsTo("App\Imagen", "idImagen");
    }

    public function categoria() {
      return $this->belongsTo("App\Categoria", "idCategoria");
    }

    public function marca() {
      return $this->belongsTo("App\Marca", "idMarca");
    }

    public function modelo() {
      return $this->belongsTo("App\Modelo", "idModelo");
    }
}
