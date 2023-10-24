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
        type: "PUT",
        data: {
            rede : rede,
            unidade : unidade,
            name : name,
            email : email,
            cep : cep,
            city : city,
            state : state,
            street : street,
            number : number,
            neighboor : neighboor,
            complement : complement,
            cnpj : cnpj,
            cellphone : cellphone,
            cpf : cpf
        },
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

function uploadImage() {
    
    // When a file is selected, display a preview of the image
    $('#uploadImage').change(function() {
        var file = this.files[0];
    
        if (file) {
            var reader = new FileReader();
    
            reader.onload = function(e) {
                $('#previewImage').attr('src', e.target.result);
                $('#previewImage').css('display', 'block');
            };
    
            reader.readAsDataURL(file);
        }
    });
}

function cadastreFarmacia() {

    const rede = $( `#rede` ).val();
    const unidade = $( `#unidade` ).val();
    const cnpj = $( `#cnpj` ).val();
    const cellphone = $( `#cellphone` ).val();
    const email = $( `#email` ).val();
    const cep = $( `#cep` ).val();
    const street = $( `#street` ).val();
    const number = $( `#number` ).val();
    const complement = $( `#complement` ).val();
    const neighboor = $( `#neighboor` ).val();
    const city = $( `#city` ).val();
    const state = $( `#state` ).val();
    const cpf = $( `#cpf` ).val();
    const name = $( `#name` ).val();

    if (!street) {

        $( `#street` ).addClass("border border-red-500");
        
    }

    if (!number) {

        $( `#number` ).addClass("border border-red-500");
        
    }

    if (!neighboor) {

        $( `#neighboor` ).addClass("border border-red-500");
        
    }

    if (!city) {

        $( `#city` ).addClass("border border-red-500");
        
    }

    if (!state) {

        $( `#state` ).addClass("border border-red-500");
        
    }

    if (!rede) {

        $( `#rede` ).addClass("border border-red-500");
        
    }

    if (!unidade) {

        $( `#unidade` ).addClass("border border-red-500");
        
    }

    if (!cep) {

        $( `#cep` ).addClass("border border-red-500");
        
    }

    if (!street || !number || !neighboor || !city || !state || !rede || !unidade || !cep) {
        return
    }

    $.ajax({
        url: `${ENDPOINT_JS}/api/pharmacy`,
        type: "POST",
        data: {
            rede : rede,
            unidade : unidade,
            cnpj : cnpj,
            cellphone : cellphone,
            email : email,
            cep : cep,
            street : street,
            number : number,
            complement : complement,
            neighboor : neighboor,
            city : city,
            state : state,
            cpf : cpf,
            name : name
        },
        success: function(data, status) {

            if (status === "success") {
                reloadPageWithModal()
            }

        }
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
