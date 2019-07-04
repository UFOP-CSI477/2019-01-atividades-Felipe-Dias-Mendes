<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedur extends Model
{
    protected $fillable = [
        'name', 'price', 'user_id'
    ];

    public function user(){
    	return $this->belongsTo('App/User', 'user_id');
    }
}
