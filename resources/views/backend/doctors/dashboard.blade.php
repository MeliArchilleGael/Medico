@extends('layouts.Backend')

@section('top_sidebar')
    @include('layouts.includes.DoctorTopBar')
@endsection

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding m-2">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                        <div class="large">{{ $patient }}</div>
                        <div class="text-muted">Patients</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-user color-blue"></em>
                        <div class="large">{{ $appointment_today }}</div>
                        <div class="text-muted">Number of appointment of today</div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-warning color-orange"></em>
                        <div class="large">{{ $appointment_pending }}</div>
                        <div class="text-muted">Pending Appointment</div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-file color-red"></em>
                        <div class="large">{{ $appointment }}</div>
                        <div class="text-muted">Total Appointment</div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>
@endsection
