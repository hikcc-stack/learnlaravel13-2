<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // hasMany - обозначает - "имеет много ..." (один продукт -> множество позиций заказа)
    // Связь с моделью Orderlist M:1
    public function orderlist(){
        return $this->hasMany(Orderlist::class);
    }
}
