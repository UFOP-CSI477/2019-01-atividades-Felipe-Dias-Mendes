<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
   	protected $fillable = [
        'user_id', 'procedur_id', 'date'
    ];

    public function user(){
    	return $this->belongsTo('App/User');
    }

    public function procedur(){
    	return $this->belongsTo('App/Procedur');
    }
}
