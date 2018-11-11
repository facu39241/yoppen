<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class DetailOrder extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
