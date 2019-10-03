<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['shop_name','shop_address','shop_description','shop_img','admin_id','prefecture_id'];
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
