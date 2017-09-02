
<?php $uses = ["datatables"]; ?>

@extends('layouts.skarla')

@section('js')
<script src="{{url("js/pages/number-series/index.js")}}"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div class="row m-b-2">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h4 class="m-b-0 ">Number Series Maintenance</h4>
            </div>            
        </div>

        <div class="panel panel-default b-a-0 p-10 shadow-box">

            @include('module.datatable', [
            "id" => "number-series-datatable",
            "columns" => ["", "Code", "Last Number Used", "Ending Number"]
            ])

        </div>
    </div>
</div>

@endsection