
/* global baseUrl */

class ChildHealthRecordAPI {

    storeRequest(record) {
        return this.saveRequest(record, 'store');
    }

    updateRequest(record) {
        return this.saveRequest(record, 'update');
    }

    saveRequest(record, action) {

        //  TODO: parameterize baseUrl
        let url = baseUrl + "/child-health-records";
        let method;

        if (action === 'update') {
            url += "/" + record.document_number;
            method = 'PUT';
        } else if (action === 'store') {
            method = 'POST';
        } else {
            throw new Error("Invalid save action " + action);
        }

        return $.ajax({
            url: url,
            type: method,
            data: record
        });

    }

}
