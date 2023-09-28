<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Estudiante;

class TutorController extends Controller
{
    public function agregarTutor (Request $request) {
        $tutor = new Tutor();
        $tutor->CODTUTOR=$request->CODTUTOR;
        $tutor->NOMBRETUTOR=$request->NOMBRETUTOR;
        $tutor->FECHANACIMIENTOTUTOR = $request -> FECHANACIMIENTOTUTOR;
        $tutor->CELULARTUTOR = $request -> CELULARTUTOR;
        $tutor->APELLIDOTUTOR = $request -> APELLIDOTUTOR;
        $tutor->GENEROTUTOR = $request -> GENEROTUTOR;
        $tutor->save();
    }

    public function buscarTutor ($id){
        return Tutor::where("CODTUTOR",$id)->get();
    }
}
