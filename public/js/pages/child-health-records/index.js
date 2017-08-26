
/* global datatable_utilities, baseUrl, session */

(function () {

    "use strict";

    $(document).ready(function () {
        initializeDatatable();
        datatable_utilities.initializeDeleteAction();
    });

    function initializeDatatable() {
        $('#chr-datatable').DataTable({
            processing: true,
            serverSide: true,
            search: {
                caseInsensitive: true
            },
            ajax: {
                url: baseUrl + "/child-health-records/datatable"
            },
            order: [2, "asc"],
            columns: [
                {data: 'document_number'},
                {data: 'document_number'},
                {data: 'last_name'},
                {data: 'first_name'},
                {data: 'middle_name'},
                {data: 'gender_code'},
                {data: 'birth_date'}
            ],
            columnDefs: [
                {searchable: false, targets: [0]},
                {orderable: false, targets: [0]},
                {
                    targets: 0,
                    render: function (code) {

                        var actions = datatable_utilities.getAllDefaultActions(code);
                        var view = datatable_utilities.getInlineActionsView(actions);
                        return view;
                    }
                },
                {
                    targets: 5,
                    render: function (genderCode) {
                        return genderCode === 'M' ? "Male" : "Female";
                    }
                },
                {
                    targets: 6,
                    render: function (birthDate) {
                        return moment(birthDate).format("MM/DD/YYYY");
                    }
                },
            ]
        });
    }

})();
