<?php

namespace App\Http\Controllers;

use App\Repuestos;
use Illuminate\Http\Request;

class RepuestoController extends Controller
{
    public function actualizar($referencia, $ganancia)
    {
        // Actualizar la ganancia del repuesto con la referencia dada
        Repuestos::where('Referencia', $referencia)
            ->update(['Ganancia' => $ganancia]);

        // Obtener el repuesto actualizado
        $taller_motocicletas = Repuestos::where('Referencia', $referencia)->take(1)->get();

        // Retornar la vista con los datos actualizados
        return view('actualizar_repuesto', ['taller_motocicletas' => $taller_motocicletas]);
    }
}
