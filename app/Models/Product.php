<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subimage;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    public function getRouteKeyName() {
        return 'product_slug';
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }
    public function brand() {
        return $this->belongsTo(Brand::class);
    }
    public function unit() {
        return $this->belongsTo(Unit::class);
    }
    public function subimage() {
        return $this->hasMany(Subimage::class);
    }
}
