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
                openAlert()
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
