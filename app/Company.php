<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Payment;

class Company extends Model
{
    protected $fillable = [
    	'name',
		'email',
		'responsable',
		'direction',
		'city',
		'date_init',
    	'cuit',
		'phone'
	];

	public function payments()
	{
		return $this->belongsTo(Payment::class);
	}


}
