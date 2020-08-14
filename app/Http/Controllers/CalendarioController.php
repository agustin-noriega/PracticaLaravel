<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class CalendarioController extends Controller
{
  public function datosCalendario(){
    $fechaOcupada = Evento::all();
    $vac = compact('fechaOcupada');
    return view('/calendario', $vac);
  }
}
