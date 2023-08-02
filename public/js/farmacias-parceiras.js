$(document).ready(function() {});

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

    $.ajax({
        url: `https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/pharmacy/${idFarmacia}`,
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
            complement : complement
        },
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                location.reload();
            }

        }
      });
}

function deleteFarmacia(idPharmacy) {

    $.ajax({
        url: `https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/pharmacy/${idPharmacy}`,
        type: "DELETE",
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                location.reload();
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


    $.ajax({
        url: `https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/pharmacy`,
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
                location.reload();
            }

        }
      });
}
