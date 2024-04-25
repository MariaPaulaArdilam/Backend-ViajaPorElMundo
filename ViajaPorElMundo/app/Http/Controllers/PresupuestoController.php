<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presupuesto;

class PresupuestoController extends Controller
{
    public function guardar(Request $request)
    {
        $presupuesto = new Presupuesto();
        $presupuesto->valor = $request->input('valor');
        $presupuesto->save();
    
     
        return response()->json(['mensaje' => 'Presupuesto guardado correctamente']);
    }

    

}
