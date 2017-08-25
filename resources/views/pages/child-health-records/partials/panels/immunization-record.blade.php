
<?php
$fields           = "pages.child-health-records.partials.fields";
$vaccineTypeCodes = ["1st", "2nd", "3rd", "b1", "b2", "b3"];
?>

<div class="panel panel-default b-a-0 shadow-box collapsible-panel collapsed">
    <div class="panel-heading b-b-2 b-b-danger">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6">Immunization Record</div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-right">
                <a href="#" class="action-panel-collapse">
                    <i class="fa fa-fw fa-chevron-up text-muted panel-collapsed-hidden"></i>
                    <i class="fa fa-fw fa-chevron-down text-muted panel-collapsed-visible"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="panel-body">

        <div class="row">

            <div class="col-md-12">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="bg-danger"></th>
                            <th colspan="7" class="text-center">Date</th>                            
                        </tr>
                        <tr>
                            <th class="bg-danger text-white" style="width: 170px;">VACCINE</th>
                            <th style="min-width: 80px;">1st</th>                            
                            <th style="min-width: 80px;">2nd</th>                            
                            <th style="min-width: 80px;">3rd</th>
                            <th style="min-width: 80px;">Booster 1</th>                            
                            <th style="min-width: 80px;">Booster 2</th>                            
                            <th style="min-width: 80px;">Booster 3</th>                            
                            <th style="min-width: 170px;">REACTION</th>                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($vaccines AS $vaccine)

                        <tr>
                            <td style="width: 170px;">{{$vaccine->vaccine_name}}</td>
                            @foreach($vaccineTypeCodes AS $code)
                            <td>
                                @include("{$fields}.immunization-date", [
                                "vaccine" => $vaccine->vaccine_name,
                                "doseTypeCode" => $code,
                                "record" => $record
                                ])
                            </td>
                            @endforeach
                            <td>
                                <textarea class="form-control full-width" data-vaccine="{{$vaccine->vaccine_name}}"></textarea>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>