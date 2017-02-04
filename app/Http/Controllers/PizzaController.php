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

        /*foreach ($ingredients['meat'] as $ingredient) {
            $pizza->meats()->save([

            ]);

        }*/
        $pizza->save();

        return redirect('pizzas');
    }

    public function delete($id)
    {
        Pizza::destroy($id);
        return redirect('pizzas');
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
        $pizza->price = $request->get('price');
        $pizza->save();

        return redirect('pizzas');
    }
}
