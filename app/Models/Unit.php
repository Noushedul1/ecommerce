<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = ['name','unit_slug','description','status'];
    public function getRouteKeyName() {
        return 'unit_slug';
    }
}
