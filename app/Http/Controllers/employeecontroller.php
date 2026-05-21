<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {
        $employee = employeemngt::all (findorfail);
        return view ('employee.index',compact(employees));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
    //
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
