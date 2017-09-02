<?php $uses = ["form", "datepicker"] ?>

@extends('layouts.skarla')

@section('js')

<script type="text/javascript">
    var code = '{{$numberSeries->code}}';
    var routeAction = '{{$routeActionName}}';
</script>

<script src="{{url("js/pages/number-series/form.js")}}"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div class="row m-b-2">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h4 class="m-b-0 ">Number Series <small>{{$routeActionName}}</small></h4>
            </div>           
        </div>        
        <div class="panel panel-default b-a-0 p-10 shadow-box">            
            <form class="fields-container">

                {{csrf_field()}}

                <div class="col-lg-6">

                    <div class="form-group">
                        <label class="control-label" for="input-code">Code</label>
                        <input name="code" value="{{$numberSeries->code}}" id="input-code" required placeholder="Ex. IM-2017 - Use the convention <module code>-<year>" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="input-starting-number">Starting Number</label>
                        <input name="starting_number" value="{{$numberSeries->starting_number}}" id="input-starting-number" required placeholder="Ex. 0" type="number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="input-ending-number">Ending Number</label>
                        <input name="ending_number" value="{{$numberSeries->ending_number}}" id="input-ending-number" required placeholder="Ex. 99999 - Recommended: 5 digits" type="number" class="form-control">
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="control-label" for="input-last-number-used">Last Number Used</label>
                        <input name="last_number_used" value="{{$numberSeries->last_number_used}}" id="input-last-number-used" type="text" class="form-control">
                    </div>
                </div>

                <div class="clearfix"></div>

                @include('module.form-actions')

                <div class="clearfix"></div>

            </form>
        </div>
    </div>
</div>

@endsection