<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Show an index page with a list of all customers
     */
    public function index()
    {
        // Retrieve a list of all customers from db
        $customers = Customer::all();

        // Get the customers/index.blade.php view and set the $customers var
        return view('customers.index', compact('customers'));
    }

    /**
     * Show an edit form for the customer with id: $id
     *
     */
    public function edit($id)
    {
        // Find the customer with id : $id
        $customer = Customer::findOrFail($id);

        // Get the customers/edit.blade.php view and set the $customer var
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        // Find the customer with id : $id and update its properies with the posted data
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());


        // Redirect borwser to the /customer page (customers index page)
        return redirect('customer');
    }

    public function delete($id)
    {
        // Delete the customer with id: $id and redirect to customers index page
        Customer::destroy($id);
        return redirect('customer');
    }

    public function add()
    {
        // Show the customers/add.blade.php form for adding a new customer
        return view('customers.add');
    }

    public function create(Request $request)
    {
        // Create a new customer using the posted data and redirect to customers index page
        $customer = Customer::create($request->all());
        return redirect('customer');
    }
}
