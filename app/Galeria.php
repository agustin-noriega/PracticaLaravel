<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
  protected $table = 'adminFoto';
  public $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}
