<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','name','subcategory_slug','description','status'];
    public function getRouteKeyName(){
        return 'subcategory_slug';
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
