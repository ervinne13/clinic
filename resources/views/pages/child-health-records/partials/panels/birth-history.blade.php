
<div class="panel panel-default b-a-0 shadow-box collapsible-panel collapsed">
    <div class="panel-heading b-b-2 b-b-danger">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6">Birth History</div>
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

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Term</label>                        
                    <select name="birth_term_code" class="form-control">
                        @foreach($birthTerms AS $code => $name)
                        <option value="{{$code}}" {{$record->birth_term_code == $code ? "selected" : ""}}>{{$name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label">No. of Months</label>                        
                    <input name="no_of_months" value="{{$record->no_of_months}}" type="number" class="form-control">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label">No. of Weeks</label>                        
                    <input name="no_of_weeks" value="{{$record->no_of_weeks}}" type="number" class="form-control">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label">No. of Days</label>                        
                    <input name="no_of_days" value="{{$record->no_of_days}}" type="number" class="form-control">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Head Circumference</label>                        
                    <input name="head_circumference" value="{{$record->head_circumference}}" type="number" class="form-control">
                </div>
            </div>

        </div>        

        <div class="row">

            <div class="col-md-9">
                <div class="form-group">
                    <label class="control-label">Type of Delivery</label>                        
                    <select name="delivery_type" class="form-control">
                        @foreach($deliveryTypes AS $type)
                        <option value="{{$type}}" {{$record->delivery_type == $type ? "selected" : ""}}>{{$type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Chest Circumference</label>                        
                    <input name="chest_circumference" value="{{$record->chest_circumference}}" type="number" class="form-control">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Birth Weight</label>
                    <input name="birth_weight" value="{{$record->birth_weight}}" type="number" class="form-control">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Birth Length</label>
                    <input name="birth_length" value="{{$record->birth_length}}" type="number" class="form-control">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Blood Type</label>                        
                    <select name="blood_type" class="form-control">
                        @foreach($bloodTypes AS $code => $name)
                        <option value="{{$code}}" {{$record->blood_type == $code ? "selected" : ""}}>{{$name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Abdominal Circumference</label>                        
                    <input name="abdominal_circumference" value="{{$record->abdominal_circumference}}" type="number" class="form-control">
                </div>
            </div>

        </div>
    </div>
</div>