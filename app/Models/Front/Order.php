<?php

namespace App\Models\Front;

use App\Models\Front\Orderitem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    public function orderitem() {
       return $this->hasMany(Orderitem::class);
    }
}
