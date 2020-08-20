<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
  protected $table = 'comentario';
  public $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}
