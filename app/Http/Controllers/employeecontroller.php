<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\employeemngt;

class employeecontroller extends Controller
{
    public function index()
<<<<<<< HEAD
    {
        $employee = employeemngt::all (findorfail);
        return view ('employee.index',compact(employees));
=======
    {   
        $employees = employeemngt::all();
        return view ('employee.index',compact('employees'));
>>>>>>> acea3270185dfb308bab7dc6a35796fb570a688c
    }


    public function create()
    {
<<<<<<< HEAD
=======
          
        return view ('employee.create');
>>>>>>> acea3270185dfb308bab7dc6a35796fb570a688c

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

    public function edit( int $id)
    {
        $employee = employee::findOrFail($id);
    }

    public function update(Request $request, int $id) {
        $employee = employee::findOrFail($id);
        $employee->fname = $request->input('fname');
        $employee->lname = $request->input('lname');
        $employee->email = $request->input('mname');
        $employee->add = $request->input('add');
        $employee->dob = $request->input('dob');
        $employee->contact = $request->input('contact');
        $employee->save();
        
        return redirect()->route('employee.index')->with('success', 'Employee updated successfully');
    }

    public function destroy(int $id){
      //
    }
}
