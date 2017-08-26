
/* global form_utilities, routeAction */

(function () {

    let chrAPI;

    $(document).ready(function () {

        chrAPI = new ChildHealthRecordAPI();

        initializeUI();
        initializeEvents();
    });

    function initializeUI() {
        $('.action-toggle-sidebar-slim').click();
        $('.datepicker').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        }, function (start, end, label) {
            console.log(start);
        });
    }

    function initializeEvents() {

        let switches = document.querySelectorAll('.vaccine-taken-checkbox');
        let switchesIter = Array.prototype.slice.call(switches);

        switchesIter.forEach(function (el) {

            el.onchange = function () {
                showVaccineDate(el);
            };

        });

        $('#action-save-profile').click(saveCHR);
    }

    function showVaccineDate(trigger) {

        let vaccine = trigger.getAttribute('data-vaccine');
        let doseType = trigger.getAttribute('data-dose-type');

        let $container = $('.vaccine-date-container[data-vaccine=' + vaccine + '][data-dose-type=' + doseType + ']');

        if (trigger.checked) {
            $container.css('display', 'block');
        } else {
            $container.css('display', 'none');
        }
    }

    function saveCHR() {
        let CHR = getCHRJSONFromView();
        let action = routeAction === 'edit' ? 'update' : 'store';

        chrAPI.saveRequest(CHR, action)
                .always(() => {
                    $('#action-save-profile').prop('disabled', false);
                })
                .done(savedCHR => {
                    console.log(savedCHR);

                    swal("Success", "Child health record saved! Redirecting ...", "success");
                    setTimeout(() => {
                        window.location.href = baseURL + "/child-health-records";
                    }, 2000);

                })
                .fail(xhr => {
                    swal("Error", xhr.responseText, "error");
                });
        $('#action-save-profile').prop('disabled', true);

    }

    function getCHRJSONFromView() {
        let CHR = form_utilities.formToJSON($('#header-fields-container'));
        CHR.document_number = $('#document-number').text();

        return CHR;
    }

}());
