<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\seleccion_viajes;


class ViajeController extends Controller
{
    public function store(Request $request)
    {
        $seleccionViaje = new seleccion_viajes();
        $seleccionViaje->pais_id = $request->input('pais_id');
        $seleccionViaje->ciudad_id = $request->input('ciudad_id');
        $seleccionViaje->save();

        return response()->json(['message' => 'Datos de selección de viaje guardados exitosamente']);
    }

  


}
