
<?php
$uses   = ["form", "datepicker"];
$panels = "pages.child-health-records.partials.panels"
?>

@extends('layouts.skarla')

@section('js')
<script src="{{url("js/pages/child-health-records/form.js")}}"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">

        @include("{$panels}.basic-info")
        @include("{$panels}.birth-history")
        @include("{$panels}.immunization-record")

        <div class="clearfix"></div>
        <div class="pull-right m-b-3">
            <button id="action-save-profile" type="button" class="btn btn-success">Save</button>
            <a href="{{url("child-health-records")}}" class="btn btn-gray">Close</a>
        </div>
    </div>
</div>

@endsection