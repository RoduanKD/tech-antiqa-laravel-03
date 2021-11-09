<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function delivery_company()
    {
        return $this->belongsTo(Delivery_company::class);
    }

}