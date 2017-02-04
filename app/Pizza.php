<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function meats()
    {
        return $this->belongsToMany('App\Meat', 'meat_pizza');
    }

    public function sauces()
    {
        return $this->belongsToMany('App\Sauce', 'sauce_pizza');
    }

    public function vegetables()
    {
        return $this->belongsToMany('App\Vegetable', 'vegetable_pizza');
    }

    public function cheeses()
    {
        return $this->belongsToMany('App\Cheese', 'cheese_pizza');
    }

    public function ingredients()
    {
        return [
            'meats'      => implode(",", $this->meats()->get()->pluck('name')->toArray()),
            'cheeses'    => implode(",", $this->cheeses()->get()->pluck('name')->toArray()),
            'vegetables' => implode(",", $this->vegetables()->get()->pluck('name')->toArray()),
            'sauces'     => implode(",", $this->sauces()->get()->pluck('name')->toArray()),
        ];
    }

}
