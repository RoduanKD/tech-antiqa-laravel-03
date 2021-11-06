<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_company extends Model
{
    use HasFactory;
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function areas()
    {
        return $this->belongsToMany(Areas::class);
    }

}
