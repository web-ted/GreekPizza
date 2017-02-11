<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that aren't mass assignable.
     * This means all.
     *
     * @var array
     */
    protected $guarded = [];
}
