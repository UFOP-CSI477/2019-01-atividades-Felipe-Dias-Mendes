<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
   	protected $fillable = [
        'user_id', 'procedur_id', 'date'
    ];
}
