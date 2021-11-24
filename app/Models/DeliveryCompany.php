<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class DeliveryCompany extends Model
{
    use HasFactory, HasTranslations;
    public $translatable = ['name', 'address'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function areas()
    {
        return $this->belongsToMany(Areas::class);
    }
}
