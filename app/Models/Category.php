<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function specifications()
    {
        return $this->belongsToMany(Specification::class);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('iamge')
            ->singleFile();
    }
}
