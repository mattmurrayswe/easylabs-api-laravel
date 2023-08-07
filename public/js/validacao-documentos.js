$(document).ready(function() {});

function validarOuInvalidarDoc(idPresc) {

    const docType = $(`#doc-type-${idPresc}`).val();
    const isValid = $(`input[name="validade-${idPresc}"]:checked`).val();
    const motivo = $(`#motivo-${idPresc}`).val();

    console.log(docType);
    console.log(isValid);
    console.log(motivo);

    $.ajax({
        url: `${ENDPOINT_JS}/api/valide/${docType}/${idPresc}`,
        type: "PUT",
        data: {
            is_valid : isValid,
            motivo : motivo
        },
        success: function(data, status) {

            if (status === "success") {
                location.reload();
            }
        }
    });
}

function baixarDoc(idPresc) {
    const docType = $(`#doc-type-${idPresc}`).val();

    $.ajax({
        url: `${ENDPOINT_JS}/api/${docType}/${idPresc}`,
        type: "GET",
        xhrFields: {
            responseType: "blob" 
        },
        success: function(data, status) {
            const blob = new Blob([data], { type: "image/jpeg" }); // Set the appropriate Content-Type for the JPG file

            const url = window.URL.createObjectURL(blob); 
            const link = document.createElement("a");
            link.href = url;
            link.setAttribute("download", `${docType}.jpg`); // Make sure to add the file extension .jpg for the downloaded file
            document.body.appendChild(link);
            link.click();
            link.remove();

            if (status === "success") {
                // Handle success if needed
            }
        }
    });
}
