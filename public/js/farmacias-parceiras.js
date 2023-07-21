$(document).ready(function() {});

function alimenteModalMedicamentoEdit(idMedicamento) {

    $( `#input-name-${idMedicamento}` ).val($( `#name-${idMedicamento}`).text() );
    $( `#input-presentation-${idMedicamento}` ).val($( `#presentation-${idMedicamento}`).text() );
    $( `#input-concentration-${idMedicamento}` ).val($( `#concentration-${idMedicamento}`).text() );
    $( `#input-volume_flask-${idMedicamento}` ).val($( `#volume_flask-${idMedicamento}`).text() );
    $( `#input-formulation-${idMedicamento}` ).val($( `#formulation-${idMedicamento}`).text() );
    $( `#input-lab-${idMedicamento}` ).val($( `#lab-${idMedicamento}`).text() );

}

function editFarmacia(idFarmacia) {

    const rede = $( `#rede-${idFarmacia}` ).val();
    const name = $( `#name-${idFarmacia}` ).val();
    const email = $( `#email-${idFarmacia}` ).val();
    const cep = $( `#cep-${idFarmacia}` ).val();
    const city = $( `#city-${idFarmacia}` ).val();
    const state = $( `#state-${idFarmacia}` ).val();
    const street = $( `#street-${idFarmacia}` ).val();
    const number = $( `#number-${idFarmacia}` ).val();
    const neighboor = $( `#neighboor-${idFarmacia}` ).val();
    const complement = $( `#complement-${idFarmacia}` ).val();

    $.ajax({
        url: `https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/pharmacy/${idFarmacia}`,
        type: "PUT",
        data: {
            rede : rede,
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
    const name = $( `#name` ).val();
    const email = $( `#email` ).val();
    const cep = $( `#cep` ).val();
    const city = $( `#city` ).val();
    const state = $( `#state` ).val();
    const street = $( `#street` ).val();
    const number = $( `#number` ).val();
    const neighboor = $( `#neighboor` ).val();
    const complement = $( `#complement` ).val();

    $.ajax({
        url: `https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/pharmacy`,
        type: "POST",
        data: {
            cep : cep,
            street : street,
            number : number,
            complement : complement,
            neighboor : neighboor,
            city : city,
            state : state,
            name : name,
            rede : rede,
            email : email
        },
        success: function(data, status) {

            if (status === "success") {
                location.reload();
            }

        }
      });
}
