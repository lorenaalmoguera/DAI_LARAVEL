<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App;
use App\Motocicletas;
use Illuminate\Http\Request;

class MotocicletaController extends Controller
{
    public function buscar($matricula)
    {
        $motocicletas = Motocicletas::where('Matricula', $matricula)->take(1)->get();
        return view('datosMotocicleta', ['motocicletas' => $motocicletas]);
    }
}
