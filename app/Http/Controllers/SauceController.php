<?php

namespace App\Http\Controllers;

use App\Sauce;
use Illuminate\Http\Request;

class SauceController extends Controller
{
    public function index()
    {
        $sauces = Sauce::all();
        return view('sauces.index', compact('sauces'));
    }

    public function edit($id)
    {
        $sauce = Sauce::findOrFail($id);
        return view('sauces.edit', compact('sauce'));
    }

    public function update(Request $request, $id)
    {
        $sauce = Sauce::findOrFail($id);
        $sauce->name = $request->get('name');
        $sauce->price = $request->get('price');
        $sauce->save();

        return redirect('sauce');
    }

    public function delete($id)
    {
        Sauce::destroy($id);
        return redirect('sauce');
    }

    public function add()
    {
        return view('sauces.add');
    }

    public function create(Request $request)
    {
        $sauce = new Sauce();
        $sauce->name = $request->get('name');
        $sauce->price = $request->get('price');
        $sauce->save();

        return redirect('sauce');
    }
}
