
<input type="checkbox" class="js-switch-small-danger vaccine-taken-checkbox" data-vaccine="{{$vaccine}}" data-dose-type="{{$doseTypeCode}}" data-record-doc-no="{{$record->document_number}}">

<div class="form-group-sm vaccine-date-container" style="display: none;" data-vaccine="{{$vaccine}}" data-dose-type="{{$doseTypeCode}}" data-record-doc-no="{{$record->document_number}}">
    <input type="text" class="form-control w-100 datepicker">
</div>