
/* global form_utilities, baseUrl, routeAction, code */

(function () {

    $(document).ready(function () {
        if (routeAction !== "show") {
            form_utilities.setFieldsRequiredDisplay();
        } else {
            form_utilities.disableFieldsOnViewMode(routeAction);
        }

        initializeUI();
        initializeForm();
    });

    function initializeUI() {
        form_utilities.initializeDefaultSelect2();
        $('.datepicker').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        }, function (selectedDate, end, label) {
            console.log(selectedDate.format("YYYY-MM-DD"));
        });
    }

    function initializeForm() {
        form_utilities.moduleUrl = baseUrl + "/number-series";
        form_utilities.updateObjectId = code;
        form_utilities.validate = true;
        form_utilities.initializeDefaultProcessing($('.fields-container'));
    }

})();
