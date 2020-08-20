<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mozos extends Model
{
  protected $table = 'adminMozo';
  public $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}
