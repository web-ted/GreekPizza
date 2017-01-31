<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function pizza()
    {
        return $this->belongsTo('App\Pizza');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
