<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $table = 'clientes';
    protected $primaryKey = 'idCliente';
    protected $timestamps = false;
    protected $guarded = [];

    public function user() {
      return $this->belongsTo("App\User", "idUser");
    }

    public function tipoDoc() {
      return $this->belongsTo("App\TipoDoc", "idTipoDoc");
    }

    public function estadoCivil() {
      return $this->belongsTo("App\EstadoCivil", "idEstadoCivil");
    }

    public function nacionalidad() {
      return $this->belongsTo("App\Nacionalidad", "idNacionalidad");
    }

    public function sexo() {
      return $this->belongsTo("App\Sexo", "idSexo");
    }

    public function pais() {
      return $this->belongsTo("App\Pais", "idPais");
    }

    public function provincia() {
      return $this->belongsTo("App\Provincia", "idProvincia");
    }

    public function localidad() {
      return $this->belongsTo("App\Localidad", "idLocalidad");
    }

}
