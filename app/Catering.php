<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
  protected $table = 'admin_caterings';
  public $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}
