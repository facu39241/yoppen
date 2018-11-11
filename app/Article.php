<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Provisioner;
use App\DetailPayment;
use App\Category;

class Article extends Model
{
    protected $fillable = [
        'provisioner_id',
        'name',
        'code',
        'price',
        'stock',
        'image',
        'description',
    ];

    public function provisioner() 
    {
        return $this->belongsTo(Provisioner::class);
    }

    public function detailPayment()
    {
        return $this->hasMany(detailPayment::class);
    }
    public function detailOrder()
    {
        return $this->hasMany(detailOrder::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}




