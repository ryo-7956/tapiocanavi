<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    public function shops() {
        return $this->hasMany('App\Shop');
    }
}
