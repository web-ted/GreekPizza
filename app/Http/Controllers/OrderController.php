<?php

namespace App\Http\Controllers;

use Auth;
use App\Customer;
use App\Employee;
use App\Order;
use App\Pizza;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin') {
            $orders = Order::all();
        } else {
            $orders = Order::where('user_id', Auth::user()->id)->get();
        }
        return view('orders.index', compact('orders'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);

        if($order->user_id != Auth::user()->id) {
            return redirect('order');
        }

        $customers = Customer::all();
        $employees = Employee::all();
        if(Auth::user()->role == 'admin') {
            $pizzas = Pizza::all();
        } else {
            $pizzas = Pizza::where('user_id', 1)->orWhere('user_id', Auth::user()->id)->get();
        }

        return view('orders.edit', compact('order','customers', 'employees', 'pizzas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pizza_id' => 'required',
        ]);

        $order = Order::findOrFail($id);
        if($order->user_id != Auth::user()->id) {
            return redirect('order');
        }

        $order->pizza_id = $request->get('pizza_id');
        $order->price = Pizza::find($request->get('pizza_id'))->price;

        $role = Auth::user()->role;
        if($role == 'admin') {
            $this->validate($request, [
                'customer_id' => 'required',
            ]);
            $order->customer_id = $request->get('customer_id');
            $order->employee_id = $request->get('employee_id');
        } elseif($role == 'customer') {
            $order->customer_id = Customer::where('user_id', Auth::user()->id)->first()->id;
        } else {
            $order->customer_id = Employee::where('user_id', Auth::user()->id)->first()->id;
        }

        $order->user_id = Auth::user()->id;
        $order->save();

        return redirect('order');
    }

    public function delete($id)
    {
        $order = Order::findOrFail($id);
        if($order->user_id != Auth::user()->id) {
            return redirect('order');
        }
        $order->destroy($id);
        return redirect('order');
    }

    public function add()
    {
        $customers = Customer::all();
        $employees = Employee::all();
        if(Auth::user()->role == 'admin') {
            $pizzas = Pizza::all();
        } else {
            $pizzas = Pizza::where('user_id', 1)->orWhere('user_id', Auth::user()->id)->get();
        }

        return view('orders.add', compact('customers', 'employees', 'pizzas'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'pizza_id' => 'required',
        ]);

        $order = new Order();
        $order->pizza_id = $request->get('pizza_id');
        $order->price = Pizza::find($request->get('pizza_id'))->price;

        $role = Auth::user()->role;
        if($role == 'admin') {
            $this->validate($request, [
                'customer_id' => 'required',
            ]);
            $order->customer_id = $request->get('customer_id');
            $order->employee_id = $request->get('employee_id');
        } elseif($role == 'customer') {
            $order->customer_id = Customer::where('user_id', Auth::user()->id)->first()->id;
        } else {
            $order->customer_id = Employee::where('user_id', Auth::user()->id)->first()->id;
        }

        $order->user_id = Auth::user()->id;
        $order->save();

        return redirect('order');
    }
}
