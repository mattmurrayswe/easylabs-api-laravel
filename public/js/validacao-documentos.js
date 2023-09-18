$(document).ready(function() {});

function validarOuInvalidarDoc(idPresc) {

    const isValidFrente = $(`input[name="validade-${idPresc}-crm-frente"]:checked`).val();
    const isValidVerso = $(`input[name="validade-${idPresc}-crm-verso"]:checked`).val();
    const isValidSelfie = $(`input[name="validade-${idPresc}-selfie-com-doc"]:checked`).val();
    const motivo = $(`#motivo-${idPresc}`).val();

    console.log(isValidFrente);
    console.log(isValidVerso);
    console.log(isValidSelfie);
    console.log(motivo);

    $.ajax({
        url: `${ENDPOINT_JS}/api/valide/crm-frente/${idPresc}`,
        type: "PUT",
        data: {
            is_valid : isValidFrente,
            motivo : motivo
        },
        success: function(data, status) {

            if (status === "success") {
                reloadPageWithModal()
            }
        }
    });

    $.ajax({
        url: `${ENDPOINT_JS}/api/valide/crm-verso/${idPresc}`,
        type: "PUT",
        data: {
            is_valid : isValidVerso,
            motivo : motivo
        },
        success: function(data, status) {

            if (status === "success") {
                reloadPageWithModal()
            }
        }
    });

    $.ajax({
        url: `${ENDPOINT_JS}/api/valide/selfie-com-doc/${idPresc}`,
        type: "PUT",
        data: {
            is_valid : isValidSelfie,
            motivo : motivo
        },
        success: function(data, status) {

            if (status === "success") {
                reloadPageWithModal()
            }
        }
    });
}

function baixarDoc(idPresc, docType) {

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
