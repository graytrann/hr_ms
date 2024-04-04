@extends('layouts.master')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="welcome-box">
                    <div class="welcome-img">
                        <img src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                    </div>
                    <div class="welcome-det">
                        <h3>Welcome, {{ Auth::user()->name }}</h3>
                        <p>{{ $todayDate }}</p>

                    </div>
                </div>
            </div>
        </div>
        <h1>ALL USER</h1>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        <div class="dash-widget-info">
                            <h3>{{ $adminCount }}</h3> <span>Admin</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-money" aria-hidden="true"></i>
                        </span>
                        <div class="dash-widget-info">
                            <h3>{{ $clientCount }}</h3> <span>Clients</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-user-circle" aria-hidden="true"></i>
                            </i></span>
                        <div class="dash-widget-info">
                            <h3>{{ $employeeCount }}</h3> <span>Employee</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <div class="dash-widget-info">
                            <h3>{{ $normalUserCount }}</h3> <span>Normal User</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-user-secret" aria-hidden="true"></i>
                        </span>
                        <div class="dash-widget-info">
                            <h3>{{ $superAdminCount }}</h3> <span>Super Admin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>EXPENSE</h1>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                <div class="card dash-widget">
                    <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        <div class="dash-widget-info">

                            <h3>{{ $formattedSalary  }} $</h3> <span>Salaries Of All Employees </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Employee Salary</h3>
                                <div id="bar-charts" data-salary-chart='{{ $salaryChartData }}'></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>

<!-- /Page Wrapper -->
@endsection