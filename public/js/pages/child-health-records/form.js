
(function () {

    $(document).ready(function () {
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

    function getCHRJSONFromView() {
        
    }

}());
