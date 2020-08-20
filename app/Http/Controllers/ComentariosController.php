<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;

class ComentariosController extends Controller
{
  public function crearComentario(Request $req){

      $Coment = new Comentarios();
      $Coment->nombre = $req['nombre'];
      $Coment->comentario = $req['comentario'];

      $Coment->save();
      return redirect('/comentarios');
  }

  public function vistaComentario(){
    $coment = Comentarios::all();
    $vac = compact('coment');
    return view('comentarios', $vac);
  }
}
