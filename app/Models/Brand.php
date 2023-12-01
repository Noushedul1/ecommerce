<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name','brand_slug','description','image','status'];
    public function getRouteKeyName() {
        return 'brand_slug';
    }
}
