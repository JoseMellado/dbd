<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
  protected $fillable = [
      'ciudad', 'pais',
  ];

  public function vuelos_entrantes()
  {
      return $this->hasMany('App\Vuelo','ubicacion_destino_id');
  }

  public function vuelos_salientes(){
      return $this->hasMany('App\Vuelo','ubicacion_origen_id');
  }
}
