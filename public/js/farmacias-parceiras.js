function importDataFarmacias() {
    const formData = new FormData();
    formData.append("file", $("#fileInput")[0].files[0]);
    formData.append("_token", "{{ csrf_token() }}");

    $.ajax({
        url: `${ENDPOINT_JS}/api/import-excel/farmacias`,
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

function editFarmacia(idFarmacia) {

    const formData = new FormData();
    const fileInput = $(`#imageUpload-${idFarmacia}`)[0];
    const rede = $( `#rede-${idFarmacia}` ).val();
    const unidade = $( `#unidade-${idFarmacia}` ).val();
    const cnpj = $( `#cnpj-${idFarmacia}` ).val();
    const cellphone = $( `#cellphone-${idFarmacia}` ).val();
    const email = $( `#email-${idFarmacia}` ).val();
    const cep = $( `#cep-${idFarmacia}` ).val();
    const street = $( `#street-${idFarmacia}` ).val();
    const number = $( `#number-${idFarmacia}` ).val();
    const complement = $( `#complement-${idFarmacia}` ).val();
    const neighboor = $( `#neighboor-${idFarmacia}` ).val();
    const city = $( `#city-${idFarmacia}` ).val();
    const state = $( `#state-${idFarmacia}` ).val();
    const cpf = $( `#cpf-${idFarmacia}` ).val();
    const name = $( `#name-${idFarmacia}` ).val();

    formData.append('rede', rede);
    formData.append('unidade', unidade);
    formData.append('foto', fileInput.files[0]);
    formData.append('cnpj', cnpj);
    formData.append('cellphone', cellphone);
    formData.append('email', email);
    formData.append('cep', cep);
    formData.append('street', street);
    formData.append('number', number);
    formData.append('complement', complement);
    formData.append('neighboor', neighboor);
    formData.append('city', city);
    formData.append('state', state);
    formData.append('cpf', cpf);
    formData.append('name', name);

    if (!street) {

        $( `#street-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!number) {

        $( `#number-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!neighboor) {

        $( `#neighboor-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!city) {

        $( `#city-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!state) {

        $( `#state-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!rede) {

        $( `#rede-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!unidade) {

        $( `#unidade-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!cep) {

        $( `#cep-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!street || !number || !neighboor || !city || !state || !rede || !unidade || !cep) {
        return
    }

    $.ajax({
        url: `${ENDPOINT_JS}/api/pharmacy/${idFarmacia}`,
        type: "POST",
        processData: false,
        contentType: false,
        data: formData,
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                reloadPageWithModal()
            }

        }
      });
}

function deleteFarmacia(idPharmacy) {

    $.ajax({
        url: `${ENDPOINT_JS}/api/pharmacy/${idPharmacy}`,
        type: "DELETE",
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                reloadPageWithModal()
            }

        }
      });
}

$(document).ready(function() {
    $("#imageUpload").change(function() {
        var file = this.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $("#imagePreview").css("display", "block");
                $("#previewImage").attr("src", e.target.result);
            };

            reader.readAsDataURL(file);
        } else {
            $("#imagePreview").css("display", "none");
        }
    });
});


function uploadImage(input, id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            // Display the selected image in the preview for the specific item
            $("#previewImage-" + id).attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}


function cadastreFarmacia() {
    const formData = new FormData();
    const rede = $(`#rede`).val();
    const unidade = $(`#unidade`).val();
    const fileInput = $(`#imageUpload`)[0];
    const cnpj = $(`#cnpj`).val();
    const cellphone = $(`#cellphone`).val();
    const email = $(`#email`).val();
    const cep = $(`#cep`).val();
    const street = $(`#street`).val();
    const number = $(`#number`).val();
    const complement = $(`#complement`).val();
    const neighboor = $(`#neighboor`).val();
    const city = $(`#city`).val();
    const state = $(`#state`).val();
    const cpf = $(`#cpf`).val();
    const name = $(`#name`).val();

    formData.append('rede', rede);
    formData.append('unidade', unidade);
    formData.append('foto', fileInput.files[0]);
    formData.append('cnpj', cnpj);
    formData.append('cellphone', cellphone);
    formData.append('email', email);
    formData.append('cep', cep);
    formData.append('street', street);
    formData.append('number', number);
    formData.append('complement', complement);
    formData.append('neighboor', neighboor);
    formData.append('city', city);
    formData.append('state', state);
    formData.append('cpf', cpf);
    formData.append('name', name);

    $.ajax({
        url: `${ENDPOINT_JS}/api/pharmacy`,
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        success: function (data, status) {
            if (status === 'success') {
                // Handle success
                reloadPageWithModal();
            }
        },
        error: function () {
            // Handle errors
        },
    });
}

function removaOuAdicioneBorderRed(element) {

    if ( $(element).val() ) {

        $(element).removeClass("border border-red-500");

    } else {

        $(element).addClass("border border-red-500");

    }
}

function exportFarmacias() {

    const search = $('#search').val();

    $.ajax({
        type: 'GET',
        url: '/api/export-excel/farmacias', // Replace with your API endpoint
        data: { search: search }, // Add the 'search' parameter to the request
        xhrFields: {
            responseType: 'blob' // Set the response type to 'blob'
        },
        success: function (data) {
            // Create a Blob object to represent the data
            var blob = new Blob([data], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

            // Check if the browser supports the 'download' attribute
            if (typeof window.navigator.msSaveBlob !== 'undefined') {
                // For Internet Explorer
                window.navigator.msSaveBlob(blob, 'farmacias.xlsx');
            } else {
                // Create a URL for the Blob
                var url = window.URL.createObjectURL(blob);

                // Create a temporary <a> element to trigger the download
                var a = document.createElement('a');
                a.href = url;
                a.download = 'farmacias.xlsx';

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
