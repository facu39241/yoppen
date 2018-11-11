<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Provisioner;
use App\DetailOrders;

class Order extends Model
{
   public function provisioner()
   {
       return $this->belongsTo(Provisioner::class);
   }
   public function detailOrders ()
   {
        return $this->hasMany(DetailPayment::class);
   }
}
     