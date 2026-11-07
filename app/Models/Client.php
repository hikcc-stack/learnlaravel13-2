<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // belongsToMany - связь многие ко многим
    // hasOneThrough -связь один к одному
    // hasMany, belongsTo - один ко многим
    //

    // hasMany - обозначает - "имеет много ..." (один клиент -> множество заказов)
    // Связь с моделью Order M:1
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
