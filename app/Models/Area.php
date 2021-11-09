<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    public function delivery_companies()
    {
        return $this->belongsToMany(Delivery_company::class);
    }

    public function city()
    {
        return $this->belongsToM(City::class);
    }
}
