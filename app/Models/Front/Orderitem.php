<?php

namespace App\Models\Front;

use App\Models\Front\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orderitem extends Model
{
    use HasFactory;
    public function order() {
        return $this->belongsTo(Order::class);
    }
}
