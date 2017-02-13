<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Employee;
use App\Order;
use App\Pizza;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);

        $customers = Customer::all();
        $employees = Employee::all();
        $pizzas = Pizza::all();

        return view('orders.edit', compact('order','customers', 'employees', 'pizzas'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->name = $request->get('name');
        $order->price = $request->get('price');
        $order->save();

        return redirect('order');
    }

    public function delete($id)
    {
        Order::destroy($id);
        return redirect('order');
    }

    public function add()
    {
        $customers = Customer::all();
        $employees = Employee::all();
        $pizzas = Pizza::all();

        return view('orders.add', compact('customers', 'employees', 'pizzas'));
    }

    public function create(Request $request)
    {
        $order = new Order();
        $order->name = $request->get('name');
        $order->price = $request->get('price');
        $order->save();

        return redirect('order');
    }
}
