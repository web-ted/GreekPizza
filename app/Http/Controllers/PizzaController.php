<?php

namespace App\Http\Controllers;

use App\Cheese;
use App\Meat;
use App\Pizza;
use App\Sauce;
use App\Vegetable;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizzas.index', compact('pizzas'));
    }

    public function edit($id)
    {
        $pizza = Pizza::findOrFail($id);
        $meats = Meat::all();
        $cheeses = Cheese::all();
        $vegetables = Vegetable::all();
        $sauces = Sauce::all();

        return view('pizzas.edit', compact('pizza', 'meats', 'cheeses', 'vegetables', 'sauces'));
    }

    public function update(Request $request, $id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->name = $request->get('name');
        $ingredients = $request->get('ingredients');

        // dd($ingredients); die;
        $pizza->meats()->sync(array_values($ingredients['meat']));
        $pizza->cheeses()->sync(array_values($ingredients['cheese']));
        $pizza->vegetables()->sync(array_values($ingredients['vegetable']));
        $pizza->sauces()->sync(array_values($ingredients['sauce']));

        $pizza->save();

        return redirect('pizza');
    }

    public function delete($id)
    {
        Pizza::destroy($id);
        return redirect('pizza');
    }

    public function add()
    {
        $meats = Meat::all();
        $cheeses = Cheese::all();
        $vegetables = Vegetable::all();
        $sauces = Sauce::all();

        return view('pizzas.add', compact('meats', 'cheeses', 'vegetables', 'sauces'));
    }

    public function create(Request $request)
    {
        $pizza = new Pizza();
        $pizza->name = $request->get('name');
        $ingredients = $request->get('ingredients');

        // dd($ingredients); die;
        $pizza->meats()->sync(array_values($ingredients['meat']));
        $pizza->cheeses()->sync(array_values($ingredients['cheese']));
        $pizza->vegetables()->sync(array_values($ingredients['vegetable']));
        $pizza->sauces()->sync(array_values($ingredients['sauce']));

        $pizza->save();

        return redirect('pizza');
    }
}
