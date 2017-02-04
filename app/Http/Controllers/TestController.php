<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $meats = Pizza::find(1)->vegetables()->get();
        return view('test.test', compact('meats'));
    }
}
