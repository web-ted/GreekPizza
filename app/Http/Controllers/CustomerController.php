<?php

namespace App\Http\Controllers;

use Auth;
use App\Customer;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Show an index page with a list of all customers
     */
    public function index()
    {
        // If user is not an admin then redirect him to orders
        if (Auth::user()->role != 'admin') {
            return redirect('order');
        }
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
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Find the customer with id : $id
        $customer = Customer::findOrFail($id);

        // Get the customers/edit.blade.php view and set the $customer var
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Find the customer with id : $id and update its properies with the posted data
        $customer = Customer::findOrFail($id);
        $user = User::findOrFail($customer->user_id);
        $user->update([
            'name'     => $request->get('firstname') . ' ' . $request->get('lastname'),
            'role'     => 'customer',
            'email'    => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);
        $customer->update($request->except(['email', 'password']));


        // Redirect borwser to the /customer page (customers index page)
        return redirect('customer');
    }

    public function delete($id)
    {
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Delete the customer with id: $id and redirect to customers index page
        Customer::destroy($id);
        return redirect('customer');
    }

    public function add()
    {
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Show the customers/add.blade.php form for adding a new customer
        return view('customers.add');
    }

    public function create(Request $request)
    {
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Create a new customer using the posted data and redirect to customers index page
        $customer = Customer::create($request->except(['email', 'password']));
        $user = User::create([
            'name'     => $request->get('firstname') . ' ' . $request->get('lastname'),
            'role'     => 'customer',
            'email'    => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);

        $customer->user_id = $user->id;
        $customer->save();

        return redirect('customer');
    }
}
