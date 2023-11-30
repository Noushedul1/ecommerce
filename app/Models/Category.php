<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','category_slug','description','status'];
    public function getRouteKeyName() {
        return 'category_slug';
    }
}