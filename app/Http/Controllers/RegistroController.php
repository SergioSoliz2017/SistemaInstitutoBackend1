<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;
class RegistroController extends Controller
{
    public function agregarRegistro (Request $request) {
        $registro = new Registro();
        $registro->CODTRABAJADOR=$request->CODTRABAJADOR;
        $registro->FECHAINSCRIPCION=$request->FECHAINSCRIPCION;
        $registro->TIEMPOINSCRIPCION = $request -> TIEMPOINSCRIPCION;
        $registro->COSTOINSCRIPCION = $request -> COSTOINSCRIPCION;
        $registro->save();
    }
}
