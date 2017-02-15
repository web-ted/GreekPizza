<?php

namespace App\Http\Controllers;

use Auth;
use App\Cheese;
use App\Meat;
use App\Pizza;
use App\Sauce;
use App\Vegetable;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * This method retrieves a pizza list and shows it to a table
     */
    public function index()
    {
        // Select all pizzas from the db if you are admin
        if(Auth::user()->role == 'admin') {
            $pizzas = Pizza::all();
        } else {
            $pizzas = Pizza::where('user_id',1)->orWhere('user_id', Auth::user()->id)->get();
        }


        // Set as view file views/pizza/index.blade.php and pass it all pizzas as $pizza var
        return view('pizzas.index', compact('pizzas'));
    }

    /**
     * This method retrieves a single pizza using a passed id
     * and makes an edit form
     *
     */
    public function edit($id)
    {
        // Find pizza with id $id from the db
        $pizza = Pizza::findOrFail($id);

        if ((Auth::user()->role != 'admin') && ($pizza->user_id != Auth::user()->id)) {
            return redirect('/pizza');
        }

        // Find all meats, cheeses, vegetables and sauces from the database
        $meats = Meat::all();
        $cheeses = Cheese::all();
        $vegetables = Vegetable::all();
        $sauces = Sauce::all();

        // Pass all ingredients and the pizza you are about to edit in view/pizza/edit.blade.php
        return view('pizzas.edit', compact('pizza', 'meats', 'cheeses', 'vegetables', 'sauces'));
    }

    public function update(Request $request, $id)
    {
        // Find pizza with id $id from the db
        $pizza = Pizza::findOrFail($id);

        // Get the posted data from the form and update pizza name in model
        $pizza->name = $request->get('name');
        $ingredients = $request->get('ingredients');

        // Check if a category of ingredients is missing and make it an empty array
        foreach (['meat', 'cheese', 'vegetable', 'sauce'] as $ingr) {
            if (!isset($ingredients[$ingr])) {
                $ingredients[$ingr] = [];
            }
        }

        // Update the pizzas many-to-many relation with meats, vegetables, cheeses and sauces.
        // sync will leave delete the previous related ingredients and established the ones posted from the form
        $pizza->meats()->sync(array_values($ingredients['meat']), true);
        $pizza->cheeses()->sync(array_values($ingredients['cheese']), true);
        $pizza->vegetables()->sync(array_values($ingredients['vegetable']), true);
        $pizza->sauces()->sync(array_values($ingredients['sauce']), true);

        // Calculate the price sum from all related tables
        // and sum it once again to calculate the total pizza's price
        $sum = array_sum([$pizza->meats()->sum('price'),
            $pizza->cheeses()->sum('price'),
            $pizza->vegetables()->sum('price'),
            $pizza->sauces()->sum('price'),
            2
        ]);

        // Set the calculated total price to the pizza model
        $pizza->price = $sum;

        // Update the pizza's new name and price
        $pizza->save();

        // Redirect browser to pizza index page
        return redirect('pizza');
    }

    public function delete($id)
    {
        // Get the id from the GET http request and find the pizza with that id
        $pizza = Pizza::findOrFail($id);

        // Delete all records from the intermediate tables
        $pizza->meats()->detach();
        $pizza->cheeses()->detach();
        $pizza->vegetables()->detach();
        $pizza->sauces()->detach();

        // Delete the pizza
        $pizza->delete();

        // Redirect browser to pizza index page
        return redirect('pizza');
    }

    public function add()
    {
        // Find all meats, cheeses, vegetables and sauces from the database
        $meats = Meat::all();
        $cheeses = Cheese::all();
        $vegetables = Vegetable::all();
        $sauces = Sauce::all();

        // Pass all ingredients in view/pizza/add.blade.php as $meats, $cheeses, $vegetables, $sauces vars
        return view('pizzas.add', compact('meats', 'cheeses', 'vegetables', 'sauces'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'ingredients' => 'required',
        ]);

        // Instantiate a new pizza model
        $pizza = new Pizza();

        // Get the pizza name from the http request and set it to the model
        $pizza->name = $request->get('name');

        $pizza->user_id = Auth::user()->id;

        // Get all the ingredients form array from the http request
        $ingredients = $request->get('ingredients');

        // Save the pizza now to create a new record and retrieve an id
        // This id is needed to add records to the related table.
        $pizza->save();

        // Check if all the categories of ingredients are posted in the form
        // if a category is missing set it as an empty array
        foreach (['meat', 'cheese', 'vegetable', 'sauce'] as $ingr) {
            if (!isset($ingredients[$ingr])) {
                $ingredients[$ingr] = [];
            }
        }

        // Update the many-to-many related tables, one for every ingredient category
        // If ingredient category is not posted then the empty array will remove any related records
        // to both the intermediate and related db table.
        $pizza->meats()->sync(array_values($ingredients['meat']), true);
        $pizza->cheeses()->sync(array_values($ingredients['cheese']), true);
        $pizza->vegetables()->sync(array_values($ingredients['vegetable']), true);
        $pizza->sauces()->sync(array_values($ingredients['sauce']), true);

        // Now calculate the sum of sums for price  retrieved from every ralated table.
        $sum = array_sum([$pizza->meats()->sum('price'),
            $pizza->cheeses()->sum('price'),
            $pizza->vegetables()->sum('price'),
            $pizza->sauces()->sum('price'),
            2
        ]);

        // Set the sum you have calculated to the model
        $pizza->price = $sum;

        // Now update the pizza's price
        $pizza->save();

        // Redirect the browser to the pizzas index page
        return redirect('pizza');
    }
}
