<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Company;
use App\Client;


class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'client_id',
        'type',
        'code',
        'date',
        'amount'
    ];
    public function user()
    {
        return $this->belongTo(User::class);
    }
    public function client()
    {
        return $this->belongTo(Client::class);
    }
    public function detailPayments()
    {
        return $this->hasMany(DetailPayment::class);
    }

    
}




