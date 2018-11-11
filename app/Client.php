<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Payment;

class Client extends Model
{
    protected $fillable = [
        'name',
		'direction',
		'phone',
		'email',
		'dni_type',
		'dni',
	];
	public function payments()
	{
		return $this->hasMany(Payment::class);
	}
}
