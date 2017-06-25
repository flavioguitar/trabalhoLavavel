<?php

namespace trabalho;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   public function users() {
    
    return $this->belongsToMany(trabalho\User)->withTimestamps();
    }

}
