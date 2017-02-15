<?php

namespace App\Http\Controllers;

use Auth;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Show an index page with a list of all employees
     */
    public function index()
    {
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Retrieve a list of all employees from db
        $employees = Employee::all();

        // Get the employees/index.blade.php view and set the $employees var
        return view('employees.index', compact('employees'));
    }

    /**
     * Show an edit form for the employee with id: $id
     *
     */
    public function edit($id)
    {
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Find the employee with id : $id
        $employee = Employee::findOrFail($id);

        // Get the employees/edit.blade.php view and set the $employee var
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Find the employee with id : $id and update its properies with the posted data
        $employee = Employee::findOrFail($id);
        // $employee->user()->first()->update([$employee])
        $employee->update($request->all());

        // Redirect borwser to the /employee page (employees index page)
        return redirect('employee');
    }

    public function delete($id)
    {
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Delete the employee with id: $id and redirect to employees index page
        Employee::destroy($id);
        return redirect('employee');
    }

    public function add()
    {
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Show the employees/add.blade.php form for adding a new employee
        return view('employees.add');
    }

    public function create(Request $request)
    {
        if(Auth::user()->role != 'admin') {
            return redirect('order');
        }

        // Create a new employee using the posted data and redirect to employees index page
        $employee = Employee::create($request->all());
        return redirect('employee');
    }
}
