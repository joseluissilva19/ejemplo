<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
  
  /*public function user()
    {
      return $this->belongsTo('App\User');
    }*/
  
    protected $fillable = ['materia','nrc','seccion','horario'];
}
