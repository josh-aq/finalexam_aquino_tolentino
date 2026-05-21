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
    {   
        $employees = employeemngt::all();
        return view ('employee.index',compact('employees'));
    }


    public function create()
    {
         
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
    }

    public function edit( int $id)
    {
        //
    }

    public function update(Request $request, int $id) {
        //
    }

    public function destroy(int $id){
      //
    }
}
