<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name','brand_slug','description','image','status'];
    public function getRouteKeyName() {
        return 'brand_slug';
    }
    public function product() {
        return $this->hasMany(Product::class);
    }
}
