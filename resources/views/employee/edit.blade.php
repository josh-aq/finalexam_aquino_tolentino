@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">{{ __('Employee Update') }}</h1> 
                    @if (session('status'))
                      <div class="alert alert-success">{{session('status')}}</div>
                  @endif
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6 m-auto">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Edit Employee Information</h3>
              </div>
              <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row card-body col-12">
                  <div class="form-group col-12">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control @error('fname') is-invalid @enderror" id="fname" name="fname" placeholder="Enter your Firstname" value="{{ $employee->fname }}" required>
                    @error('fname')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>                  
                  <div class="form-group col-12">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control @error('lname') is-invalid @enderror" id="lname" name="lname" placeholder="Enter your Last Name" value="{{ $employee->lname }}" required>
                    @error('lname')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-12">
                    <label for="mname">Middle Name</label>
                    <input type="text" class="form-control @error('mname') is-invalid @enderror" id="mname" name="mname" placeholder="Enter your Middle Name" value="{{ $employee->mname }}" required>
                    @error('mname')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-12">
                    <label for="add">Address</label>
                    <input type="text" class="form-control @error('add') is-invalid @enderror" id="add" name="add" placeholder="Enter Address" value="{{ $employee->add }}" required>
                    @error('add')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-12">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ $employee->dob }}" required>
                    @error('dob')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-12">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="Enter contact number" value="{{ $employee->contact }}" required>
                    @error('contact')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-12">
                    <button type="submit" class="btn btn-success col-12">Update Employee Record</button>
                    <a href="{{ route('employee.index') }}" class="btn btn-secondary col-12 mt-2">Cancel</a>
                  </div>
                </div>
              </form>
      
@endsection