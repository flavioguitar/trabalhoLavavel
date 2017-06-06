<?php

namespace trabalho;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected  $table = 'categoria';
    protected  $fillable = [
      'tipo', 
    ];
}
