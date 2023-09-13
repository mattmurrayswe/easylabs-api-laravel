$(document).ready(function() {});

function alimenteModalMedicamentoEdit(idMedicamento) {

    $( `#input-name-${idMedicamento}` ).val($( `#name-${idMedicamento}`).text() );
    $( `#input-presentation-${idMedicamento}` ).val($( `#presentation-${idMedicamento}`).text() );
    $( `#input-concentration-${idMedicamento}` ).val($( `#concentration-${idMedicamento}`).text() );
    $( `#input-volume_flask-${idMedicamento}` ).val($( `#volume_flask-${idMedicamento}`).text() );
    $( `#input-formulation-${idMedicamento}` ).val($( `#formulation-${idMedicamento}`).text() );
    $( `#input-lab-${idMedicamento}` ).val($( `#lab-${idMedicamento}`).text() );

}

function editMedicamento(idMedicamento) {

    const name = $( `#input-name-${idMedicamento}` ).val();
    const presentation = $( `#input-presentation-${idMedicamento}` ).val();
    const concentration = $( `#input-concentration-${idMedicamento}` ).val();
    const volume_flask = $( `#input-volume_flask-${idMedicamento}` ).val();
    const formulation = $( `#input-formulation-${idMedicamento}` ).val();
    const lab = $( `#input-lab-${idMedicamento}` ).val();

    $.ajax({
        url: `${ENDPOINT_JS}/api/medicine/${idMedicamento}`,
        type: "PUT",
        data: {
            name: name,
            presentation: presentation,
            concentration: concentration,
            volume_flask: volume_flask,
            formulation: formulation,
            lab: lab
        },
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                openAlert()
            }

        }
      });
}

function deleteMedicamento(idMedicamento) {

    $.ajax({
        url: `${ENDPOINT_JS}/api/medicine/${idMedicamento}`,
        type: "DELETE",
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                openAlert()
            }

        }
      });
}

function cadastreMedicamento() {

    const name = $( `#input-add-name` ).val();
    const presentation = $( `#input-add-presentation` ).val();
    const concentration = $( `#input-add-concentration` ).val();
    const volume_flask = $( `#input-add-volume_flask` ).val();
    const formulation = $( `#input-add-formulation` ).val();
    const lab = $( `#input-add-lab` ).val();

    $.ajax({
        url: `${ENDPOINT_JS}/api/medicine`,
        type: "POST",
        data: {
            name: name,
            presentation: presentation,
            concentration: concentration,
            volume_flask: volume_flask,
            formulation: formulation,
            lab: lab
        },
        success: function(data, status) {

            if (status === "success") {
                openAlert()
            }

        }
      });
}

function exportMeds() {
    $.ajax({
        type: 'GET',
        url: '/api/export-excel/medicines', // Replace with your API endpoint
        xhrFields: {
            responseType: 'blob' // Set the response type to 'blob'
        },
        success: function (data) {
            // Create a Blob object to represent the data
            var blob = new Blob([data], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

            // Check if the browser supports the 'download' attribute
            if (typeof window.navigator.msSaveBlob !== 'undefined') {
                // For Internet Explorer
                window.navigator.msSaveBlob(blob, 'medicamentos.xlsx');
            } else {
                // Create a URL for the Blob
                var url = window.URL.createObjectURL(blob);

                // Create a temporary <a> element to trigger the download
                var a = document.createElement('a');
                a.href = url;
                a.download = 'medicamentos.xlsx';

                // Trigger the download
                a.click();

                // Clean up
                window.URL.revokeObjectURL(url);
            }
        },
        error: function (error) {
            console.error('Download failed:', error);
        }
    });
}

function openAlert() {
    const alert = document.getElementById("alert-3");
    if (alert) {
      alert.style.display = "flex";
    }
}
  
  // To close the alert, you can create a similar function:
  function closeAlert() {
    const alert = document.getElementById("alert-3");
    if (alert) {
      alert.style.display = "none";
    }
}
