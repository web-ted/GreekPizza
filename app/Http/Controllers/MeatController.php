<?php

namespace App\Http\Controllers;

use App\Meat;
use Illuminate\Http\Request;

class MeatController extends Controller
{
    public function index()
    {
        $meats = Meat::all();
        return view('meats.index', compact('meats'));
    }

    public function edit($id)
    {
        $meat = Meat::findOrFail($id);
        return view('meats.edit', compact('meat'));
    }
}
