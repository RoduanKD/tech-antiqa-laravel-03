<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Area extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];
    public function delivery_companies()
    {
        return $this->belongsToMany(Delivery_company::class);
    }

    public function city()
    {
        return $this->belongsToM(City::class);
    }
}
