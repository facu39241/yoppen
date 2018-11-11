<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Company;
use App\Client;


class Payment extends Model
{
    protected $fillable = [
        'type',
		'code',
		'date',
		'amount',
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }
    public function client()
    {
        return $this->belongTo(Client::class);
    }
    public function company()
    {
        return $this->belongTo(Company::class);
    }
    public function detailPayments()
    {
        return $this->hasMany(DetailPayment::class);
    }

    
}




