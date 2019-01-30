<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
  protected $fillable=[
  'codigo', 'fecha', 'hora',
  ];

  public function ubicacion_origen()
  {
      return $this->belongsTo('App\Ubicacion','ubicacion_origen_id');
  }

  public function ubicacion_destino()
  {
      return $this->belongsTo('App\Ubicacion','ubicacion_destino_id');
  }
}
