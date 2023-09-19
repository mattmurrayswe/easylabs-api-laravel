// $(document).ready(function() {});

function editarPermissaoDoUsuario(idUnique) {

    const idUser = $(`#id-user-${idUnique}`).val();
    const idPermOld = $(`#id-permissao-old-${idUnique}`).val();
    const idPermNew = $(`#id-permissao-new-${idUnique}`).val();

    console.log(idUser)
    console.log(idPermOld)
    console.log(idPermNew)

    $.ajax({    
        url: `${ENDPOINT_JS}/api/permissao-user`,
        type: "PUT",
        data: {
            id_user : idUser,
            id_permissao_old : idPermOld,
            id_permissao_new : idPermNew,
        },
        success: function(data, status) {

            if (status === "success") {
                reloadPageWithModal()
            }
        }
    });
}

function exportUsuarios() {

    const search = $('#search').val();

    $.ajax({
        type: 'GET',
        url: '/api/export-excel/usuarios', // Replace with your API endpoint
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
                window.navigator.msSaveBlob(blob, 'usuarios.xlsx');
            } else {
                // Create a URL for the Blob
                var url = window.URL.createObjectURL(blob);

                // Create a temporary <a> element to trigger the download
                var a = document.createElement('a');
                a.href = url;
                a.download = 'usuarios.xlsx';

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
