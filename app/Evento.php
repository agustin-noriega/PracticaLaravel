<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
  protected $table = 'tablaEvento';
  public $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}
