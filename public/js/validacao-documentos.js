$(document).ready(function() {});

function validarOuInvalidarDoc(idPresc) {

    const docType = $(`#doc-type-${idPresc}`).val();
    const isValid = $(`input[name="validade-${idPresc}"]:checked`).val();
    const motivo = $(`#motivo-${idPresc}`).val();

    console.log(docType);
    console.log(isValid);
    console.log(motivo);

    $.ajax({
        url: `https://localhost:8989/api/valide/${docType}/${idPresc}`,
        type: "PUT",
        data: {
            is_valid : isValid,
            motivo : motivo
        },
        success: function(data, status) {

            if (status === "success") {
                
            }
        }
    });
}

function baixarDoc(idPresc) {
    const docType = $(`#doc-type-${idPresc}`).val();

    $.ajax({
        url: `https://localhost:8989/api/${docType}/${idPresc}`,
        type: "GET",
        xhrFields: {
            responseType: "blob" 
        },
        success: function(data, status) {
            const url = window.URL.createObjectURL(data); 
            const link = document.createElement("a");
            link.href = url;
            link.setAttribute("download", `${docType}`); 
            document.body.appendChild(link);
            link.click();
            link.remove();

            if (status === "success") {
                
            }
        }
    });
}
