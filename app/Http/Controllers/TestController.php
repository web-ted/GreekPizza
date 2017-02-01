<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $result = Pizza::find(1)->meats()->get();
        return view('test.test', compact('result'));
    }
}
