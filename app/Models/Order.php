<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'accepted_at'   => 'datetime'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function delivery_company()
    {
        return $this->belongsTo(Delivery_company::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
