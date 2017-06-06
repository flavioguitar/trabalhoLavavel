<?php

namespace trabalho;

use Illuminate\Database\Eloquent\Model;

class assento extends Model
{
    protected  $table = 'assento';
    protected  $fillable = [
      'assento_evento',
      'numero',
    ];
}
