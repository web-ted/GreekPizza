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

    public function update(Request $request, $id)
    {
        $meat = Meat::findOrFail($id);
        $meat->name = $request->get('name');
        $meat->price = $request->get('price');
        $meat->save();

        return redirect('meat');
    }

    public function delete($id)
    {
        Meat::destroy($id);
        return redirect('meat');
    }

    public function add()
    {
        return view('meats.add');
    }

    public function create(Request $request)
    {
        $meat = new Meat();
        $meat->name = $request->get('name');
        $meat->price = $request->get('price');
        $meat->save();

        return redirect('meat');
    }
}
