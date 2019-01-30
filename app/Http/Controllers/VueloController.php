<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubicacion;
use App\Vuelo;
class VueloController extends Controller
{
    public function vueloPorCiudad($origen,$destino){
        $ubicacion = Ubicacion::where('ciudad','=',$origen)->value('id');
        $ubicacion2 = Ubicacion::where('ciudad','=',$destino)->value('id');
        return Vuelo::where('ubicacion_destino_id','=',$ubicacion)
          ->where('ubicacion_origen_id','=',$ubicacion2)
          ->where('fecha','>','now')->get();
    }
}
