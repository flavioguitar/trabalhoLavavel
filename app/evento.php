<?php

namespace trabalho;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected  $table = 'evento';
    protected  $fillable = [
      'evento_categoria',
      'descricao',
      'cartaz',
      'data',
      'QtdAssentos',
      'AssentosDisponiveis',
    ];
}
