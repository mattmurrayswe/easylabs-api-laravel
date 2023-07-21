// $(document).ready(function() {});

function editarPermissaoDoUsuario(idUnique) {

    const idUser = $(`#id-user-${idUnique}`).val();
    const idPermOld = $(`#id-permissao-old-${idUnique}`).val();
    const idPermNew = $(`#id-permissao-new-${idUnique}`).val();

    console.log(idUser)
    console.log(idPermOld)
    console.log(idPermNew)

    $.ajax({    
        url: `http://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/permissao-user`,
        type: "PUT",
        data: {
            id_user : idUser,
            id_permissao_old : idPermOld,
            id_permissao_new : idPermNew,
        },
        success: function(data, status) {

            if (status === "success") {
                location.reload();
            }
        }
    });
}
