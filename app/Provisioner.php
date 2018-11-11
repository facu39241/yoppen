<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Article;

class Provisioner extends Model
{
    protected $fillable = [
        'name',
        'direccion',
        'phone',
        'cuit',
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}



