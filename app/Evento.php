<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
  protected $table = 'eventos';
  public $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}
