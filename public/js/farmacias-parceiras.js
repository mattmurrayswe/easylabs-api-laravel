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

    if (!rede) {

        $( `#rede-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!unidade) {

        $( `#unidade-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!cep) {

        $( `#cep-${idFarmacia}` ).addClass("border border-red-500");
        
    }

    if (!rede || !unidade || !cep) {
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
                openAlert()
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
                openAlert()
            }

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

    if (!rede) {

        $("#rede").addClass("border border-red-500");
        
    }

    if (!unidade) {

        $("#unidade").addClass("border border-red-500");
        
    }

    if (!cep) {

        $("#cep").addClass("border border-red-500");
        
    }

    if (!rede || !unidade || !cep) {
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
                openAlert()
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
