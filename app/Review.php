<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $primaryKey = 'review_id';

    public function shop() {
        return $this->belongsTo('App\Shop', 'shop_id', 'review_shop_id');
    }

    public function user() {
        return $this->belongsTo('App\Use', 'id', 'user_id');
    }
}
