<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [ 'name', 'estado_id' ];

    public function estado() {
      return $this->belongsTo('App\Estado');
    }
}
