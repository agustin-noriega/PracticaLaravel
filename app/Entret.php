<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entret extends Model
{
  protected $table = 'adminEntret';
  public $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}
