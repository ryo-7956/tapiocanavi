<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['shop_description'];

    public function prefecture() {
        return $this->belongsTo('App\Prefecture');
    }

    public function admin() {
        return $this->belongsTo('App\Admin');
    }
}
