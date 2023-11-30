<?php

namespace App\Models;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','category_slug','description','status'];
    public function getRouteKeyName() {
        return 'category_slug';
    }
    public function subcategory() {
        return $this->hasMany(Subcategory::class);
    }
    // public function getNameAttribute($value){
    //     return Str::upper($value);
    // }
    // public function setNameAttribute($value) {
    //     $this->attributes['name'] = ucfirst($value);
    // }
}
