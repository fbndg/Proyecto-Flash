<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{

    protected $table = 'facturas';
    protected $primaryKey = 'idFactura';
    //protected $timestamps = false;
    protected $guarded = [];

    public function detalleFactura() {
      return $this->belongsTo("App\DetalleFactura", "iDetalleFactura");
    }

    public function condicionIva() {
      return $this->belongsTo("App\CondicionIva", "idCondicionIva");
    }

    public function formaDePago() {
      return $this->belongsTo("App\FormaPago", "idFormaPago");
    }

    public function descuento() {
      return $this->belongsTo("App\Descuento", "idDescuento");
    }

    public function formaDeEnvio() {
      return $this->belongsTo("App\FormaEnvio", "idFormaEnvio");
    }

}
