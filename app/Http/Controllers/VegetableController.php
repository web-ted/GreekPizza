<?php

namespace App\Http\Controllers;

use App\Vegetable;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
    public function index()
    {
        $vegetables = Vegetable::all();
        return view('vegetables.index', compact('vegetables'));
    }

    public function edit($id)
    {
        $vegetable = Vegetable::findOrFail($id);
        return view('vegetables.edit', compact('vegetable'));
    }

    public function update(Request $request, $id)
    {
        $vegetable = Vegetable::findOrFail($id);
        $vegetable->name = $request->get('name');
        $vegetable->price = $request->get('price');
        $vegetable->save();

        return redirect('vegetable');
    }

    public function delete($id)
    {
        Vegetable::destroy($id);
        return redirect('vegetable');
    }

    public function add()
    {
        return view('vegetables.add');
    }

    public function create(Request $request)
    {
        $vegetable = new Vegetable();
        $vegetable->name = $request->get('name');
        $vegetable->price = $request->get('price');
        $vegetable->save();

        return redirect('vegetable');
    }
}
