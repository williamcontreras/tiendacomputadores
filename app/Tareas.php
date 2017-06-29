<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    //
  protected $table ='tareas';
    protected $fillable = array('cuerpo','compltado');
}
