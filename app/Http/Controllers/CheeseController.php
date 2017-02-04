<?php

namespace App\Http\Controllers;

use App\Cheese;
use Illuminate\Http\Request;

class CheeseController extends Controller
{
    public function index()
    {
        $cheeses = Cheese::all();
        return view('cheeses.index', compact('cheeses'));
    }

    public function edit($id)
    {
        $cheese = Cheese::findOrFail($id);
        return view('cheeses.edit', compact('cheese'));
    }

    public function update(Request $request, $id)
    {
        $cheese = Cheese::findOrFail($id);
        $cheese->name = $request->get('name');
        $cheese->price = $request->get('price');
        $cheese->save();

        return redirect('cheese');
    }

    public function delete($id)
    {
        Cheese::destroy($id);
        return redirect('cheese');
    }

    public function add()
    {
        return view('cheeses.add');
    }

    public function create(Request $request)
    {
        $cheese = new Cheese();
        $cheese->name = $request->get('name');
        $cheese->price = $request->get('price');
        $cheese->save();

        return redirect('cheese');
    }
}
