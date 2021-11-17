@extends('layouts.dashboard_layout')
@section('content')
    <div class="container p-3">
        <a class="header-link" href="{{ route('admin.employees') }}">
            <h2 class="header-text">
                <i class="fa fa-users"></i>
                &nbsp;&nbsp;Employees
            </h2>
        </a>
        <hr>

        <section id="addEmployeeForm">
            <div class="card w-75 m-auto shadow-lg">
                <div class="card-header pt-4 ps-4 pe-4">
                    <a href="{{ route('admin.employees') }}" class="btn btn-danger float-end"><i class="fa fa-times-circle"></i> </a>
                    <h4 class="text-center text-primary">Add Employee</h4>
                    <h6 class="text-secondary">Fields with (<span class="text-danger">*</span>) is required.</h6>
                </div>
                <div class="card-body p-4">
                    <form action="" method="POST">
                        <div class="row">
                            <label class="form-label" for="name">Name: <strong class="text-danger">*</strong></label>
                            <div class="col-md-4 col-lg-4 col-sm-12 mb-1">
                                <input class="form-control" type="text" placeholder="First Name" id="fname" name="fname" required>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 mb-1">
                                <input class="form-control" type="text" placeholder="Middle Name" id="mname" name="mname">
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 mb-1">
                                <input class="form-control" type="text" placeholder="Last Name" id="lname" name="lname" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="mb-2">
                                    <label for="role" class="form-label">Role / Position: <strong class="text-danger">*</strong></label>
                                    <input type="text" class="form-control" placeholder="Role" id="role" name="role" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="mb-2">
                                    <label for="address" class="form-label">Address: <strong class="text-danger">*</strong></label>
                                    <input type="text" class="form-control" placeholder="Address" id="address" name="address" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="mb-2">
                                    <label for="phone" class="form-label">Phone: <strong class="text-danger">*</strong></label>
                                    <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email: <strong class="text-danger">*</strong></label>
                                    <input type="text" class="form-control" placeholder="Email" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="mb-2">
                                    <label for="uname" class="form-label">Username: <strong class="text-danger">*</strong></label>
                                    <input type="text" class="form-control" placeholder="Username" id="uname" name="uname" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="mb-2">
                                    <label for="password" class="form-label">Password <strong class="text-danger">*</strong></label>
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="mb-2">
                                    <label for="password" class="form-label">Confirm Password <strong class="text-danger">*</strong></label>
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-4">
                        <div class="float-end">
                            <a href="{{ route('admin.employees') }}" class="btn btn-danger"> Cancel </a>
                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection