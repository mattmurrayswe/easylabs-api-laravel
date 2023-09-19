function importData() {
    const formData = new FormData();
    formData.append("file", $("#fileInput")[0].files[0]);
    formData.append("_token", "{{ csrf_token() }}");

    $.ajax({
        url: `${ENDPOINT_JS}/api/import-excel/medicines`,
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response, status) {

            console.log(response)
            console.log(status)

            if (status === "success") {
                // If the response status is 200, show the success message
                reloadPageWithModal()
            }
        },
        error: function (error) {
            console.error("An error occurred:", error);
        },
    });
}


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
        success: function(dataResponse, status) {

            console.log(dataResponse)
            if (status === "success") {
                reloadPageWithModal()
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
                reloadPageWithModal()
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
                reloadPageWithModal()
            }

        }
      });
}

function exportMeds() {

    const search = $('#search').val();

    $.ajax({
        type: 'GET',
        url: '/api/export-excel/medicines',
        data: { search: search }, // Add the 'search' parameter to the request
        xhrFields: {
            responseType: 'blob'
        },
        success: function (data) {
            var blob = new Blob([data], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

            if (typeof window.navigator.msSaveBlob !== 'undefined') {
                window.navigator.msSaveBlob(blob, 'medicamentos.xlsx');
            } else {
                var url = window.URL.createObjectURL(blob);
                var a = document.createElement('a');
                a.href = url;
                a.download = 'medicamentos.xlsx';
                a.click();
                window.URL.revokeObjectURL(url);
            }
        },
        error: function (error) {
            console.error('Download failed:', error);
        }
    });
}

function openAlert(showModal) {
    console.log(showModal)
    const alert = document.getElementById("alert-3");
    if (showModal && alert) {
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

function checkURLParameter() {
    const urlParams = new URLSearchParams(window.location.search);
    const showModal = urlParams.get("showModal");
    
    // Convert the parameter value to a boolean (if it's present)
    const shouldShowModal = showModal === "true";
    
    openAlert(shouldShowModal);
}

window.addEventListener("load", () => {
  checkURLParameter();
});

function reloadPageWithModal() {
    // Get the current URL
    let currentURL = window.location.href;
  
    // Check if the URL already contains a query string
    if (currentURL.includes("?")) {
      // If it does, append the showModal parameter
      currentURL += "&showModal=true";
    } else {
      // If not, add the query string with the showModal parameter
      currentURL += "?showModal=true";
    }
  
    // Reload the page with the modified URL
    window.location.href = currentURL;
}
