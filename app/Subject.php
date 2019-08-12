<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
      public function schoolclass(){
   	return $this->belongsToMany(Schoolclass::class);
   }


        public function marks()
    {
        return $this->hasMany(Marksdetail::class);
    }
}
