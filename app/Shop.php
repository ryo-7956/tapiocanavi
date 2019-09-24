<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['shop_description'];
    protected $primaryKey = 'shop_id';

    public function prefecture() {
        return $this->belongsTo('App\Prefecture');
    }

    public function admin() {
        return $this->belongsTo('App\Admin');
    }

    public function reviews() {
        return $this->hasMany('App\Review', 'review_shop_id', 'shop_id');
    }
}
