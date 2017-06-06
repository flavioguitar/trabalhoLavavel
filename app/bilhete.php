<?php

namespace trabalho;

use Illuminate\Database\Eloquent\Model;

class bilhete extends Model
{
    protected  $table = 'assento';
    protected  $fillable = [
      'bilhete_evento',
      'bilhete_usuario',
      'bilhete_assento',
    ];
}
