<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
  protected $table = 'adminCatering';
  public $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}
