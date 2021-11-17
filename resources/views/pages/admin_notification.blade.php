@extends('layouts.dashboard_layout')
@section('content')
    <div class="container p-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('admin.notification') }}"><h2 class="header-text"><i class="fa fa-users"></i>&nbsp;&nbsp;Notifications</h2></a>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"> </ul>
                    <form class="d-flex">
                        <div class="input-group">
                            <input class="form-control mt-1" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary mt-1" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                            <a href="{{ route('admin.addEmployees') }}" class="btn btn-primary form-inline ms-2 mt-1" id="btn-plus-label"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Employee</a>
                            <a href="{{ route('admin.addEmployees') }}" class="btn btn-primary form-inline ms-2 mt-1" id="btn-plus"><i class="fa fa-plus-circle"></i></a>
                        </div>
                    </form>
                </div> --}}
            </div>
        </nav>
        <hr>

        <section id="notifs">
            <div>
                <div class="row">
                    <div class="col-sm-10 col-md-7 col-lg-7 mx-auto">
                        <h4 class="text-center text-secondary">No notifications yet.</h4>
                        <div class="p-4 notif-list-bg">
                            <div class="float-end">
                                <form action="" method="POST">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check"></i>
                                        &nbsp;Mark all as read
                                    </button>
                                </form>
                            </div>
                            <br>
                            <hr> 
                            <div class="flex-fill p-3 notif">
                                <a href="" class="card-link">
                                    <div class="">
                                        <h5 class="text-primary">Joseph Andrey Dacera <span class="text-secondary">request to post an announcement.</span></h5>
                                        <h6><strong>Requested on: </strong> <span class="text-secondary">09/15/1999 03:00 PM</span></h6>
                                    </div>
                                </a>
                            </div>
                            <hr>
                            <div class="flex-fill p-3 notif">
                                <a href="" class="card-link">
                                    <div class="">
                                        <h5 class="text-primary">Joseph Andrey Dacera <span class="text-secondary">filled a leave of absent.</span></h5>
                                        <h6><strong>Requested on: </strong> <span class="text-secondary">09/15/1999 03:00 PM</span></h6>
                                    </div>
                                </a>
                            </div>
                            <hr>
                            <div class="flex-fill p-3 notif">
                                <a href="" class="card-link">
                                    <div class="">
                                        <h5 class="text-primary">Joseph Andrey Dacera <span class="text-secondary">filled a travel order.</span></h5>
                                        <h6><strong>Requested on: </strong> <span class="text-secondary">09/15/1999 03:00 PM</span></h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>
@endsection