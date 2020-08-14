<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mozos extends Model
{
  protected $table = 'admin_mozos';
  public $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}
