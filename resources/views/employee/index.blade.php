@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <a href="employee.create" class="btn btn-info">Add New Employee</a> <br> <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody  >
                                        <tr>
                                            @Foreach ($employees as $employee)
                                            <td>{{$employee->fname}}</td>
                                            <td>{{$employee->mname}}</td>
                                            <td>{{$employee->lname}}</td>
                                            <td>{{$employee->add}}</td>
                                            <td>{{$employee->dob}}</td>
                                            <td>{{$employee->contact}}</td>
                                            <td> 
                                                @endforeach
                                                <a href="employee.edit" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Edit</a>
                                                <a href="employee.destroy" class="btn btn-danger btn-md active" role="button" aria-pressed="true">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content --> 
     @endsection
