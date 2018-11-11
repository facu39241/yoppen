<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\Payment;


class DetailPayment extends Model
{
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
