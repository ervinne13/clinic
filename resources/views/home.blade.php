@extends('layouts.skarla')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Welcome {{Auth::user()->getDisplayName()}}</div>

            <div class="panel-body">

                <div class="text-center">
                    <img src="{{url("static-img/Caduceus.png")}}" height="150px;">

                    <h3>St. Margareth Medical Clinic, Inc.</h3>
                    <p>7 Estanislao St. Lakeview Homes, Putatan, Muntinlupa City</p>

                </div>

                <h5>Shortcuts</h5>

                <div class="text-center">
                    <div class="col-md-4">
                        <a href="{{url("/child-health-records/create")}}" class="btn btn-jasper full-width">
                            <i class="fa fa-4x fa-plus"></i>
                            <br>
                            Create new Child's Health Record
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url("/child-health-records")}}" class="btn btn-cranberry full-width">
                            <i class="fa fa-4x fa-users"></i>
                            <br>
                            View Health Records
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url("/change-password")}}" class="btn btn-dull-red full-width">
                            <i class="fa fa-4x fa-gears"></i>
                            <br>
                            Account Info / Change Password
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
