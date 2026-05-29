<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employeemngt;

class employeecontroller extends Controller
{
    public function index()
    {
        $employees = employeemngt::all();
        return view ('employee.index',compact('employees'));
    }


    public function create()
    {

        return view ('employee.create');

    }


    public function store(Request $request)
    {
    $request ->validate([
        'fname'=> 'required',
         'mname'=> 'required',
          'lname'=> 'required',
           'add'=> 'required',
            'dob'=> 'required',
             'contact'=> 'required'



    ]);
    employeemngt::create($request->all());
    return redirect()->route('employee.index');
    }

    public function edit(int $id)
    {
        $employee = employeemngt::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'add' => 'required',
            'dob' => 'required',
            'contact' => 'required'
        ]);

        $employee = employeemngt::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employee.index')->with('success', 'Employee updated successfully!');
    }

    public function destroy(int $id)
    {
        $employee = employeemngt::findOrFail($id);
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully!');
    }
}
