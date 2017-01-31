<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function meats()
    {
        return $this->belongsToMany('App\Meat');
    }

    public function sauces()
    {
        return $this->belongsToMany('App\Sauce');
    }

    public function vegetables()
    {
        return $this->belongsToMany('App\Vegetable');
    }

    public function cheeses()
    {
        return $this->belongsToMany('App\Cheese');
    }
}
