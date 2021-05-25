<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\Payment;


class DetailPayment extends Model
{

    public $fillable = [
        'payment_id',
        'user_id',
        'name',
        'code',
        'price'
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
