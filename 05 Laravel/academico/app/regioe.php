<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regioe extends Model
{
    // Lista dos campos que podem ser gravados com o mass assignment
  protected $fillable = [ 'name' ];

  // Lista de campos protegidos - não podem ser atualizados diretamente
  // protected $guarded = [ 'senha' ];
}