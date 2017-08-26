<div class="panel panel-default b-a-0 shadow-box">
    <div class="panel-heading b-b-2 b-b-danger">
        <h3 class="m-a-0">
            Child's Health Record
            <span class="pull-right">
                <h4>
                    Document Number: 
                    <b class="text-danger" id="document-number">{{$record->document_number}}</b> 
                    <a href="javascript:void(0)" id="action-edit-document-number">
                        <i class="fa fa-pencil"></i>
                    </a>
                </h4>
            </span>
        </h3>               
    </div>
    <div class="panel-body">

        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">First Name</label>                        
                    <input name="first_name" value="{{$record->first_name}}" type="text" class="form-control">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label">Middle Name</label>                        
                    <input name="middle_name" value="{{$record->middle_name}}" type="text" class="form-control">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">Last Name</label>                        
                    <input name="last_name" value="{{$record->last_name}}" type="text" class="form-control">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label">Sex</label>
                    <select name="gender_code" class="form-control">
                        @foreach($genders AS $code => $name)
                        <option value="{{$code}}" {{$record->gender_code == $code ? "selected" : ""}}>{{$name}}</option>
                        @endforeach
                    </select>                
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label class="control-label">Birthday</label>                        
                    <input name="birth_date" value="{{$record->birth_date}}" type="text" class="form-control datepicker">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Telephone / Contact</label>                        
                    <input name="contact" value="{{$record->contact}}" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label class="control-label">Fathers's Full Name</label>                        
                    <input name="fathers_name" value="{{$record->fathers_name}}" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label class="control-label">Mother's Full Name</label>                        
                    <input name="mothers_name" value="{{$record->mothers_name}}" type="text" class="form-control">
                </div>
            </div>  

            <div class="col-md-8">
                <div class="form-group">
                    <label class="control-label">Address</label>
                    <textarea name="address" class="form-control full-width h-170">{{$record->address}}</textarea>                    
                </div>
            </div>

        </div>

    </div>
</div>