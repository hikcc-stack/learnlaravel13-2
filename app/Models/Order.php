<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // belongsTo - обозначает - "принадлежит одному" (много заказов -> один заказ)
    // Связь с моделью Client M:1
    public function client(){
        return $this->belongsTo(Client::class);
    }
    // hasMany - обозначает - "имеет много ..." (один продукт -> множество позиций заказа)
    // Связь с моделью Client M:1
    public function orderlist(){
        return $this->hasMany(OrderList::class);
    }
}
