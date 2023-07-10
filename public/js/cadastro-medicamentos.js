$(document).ready(function() {});

function editMedicamento(idMedicamento) {

    const name = $( `#input-name-${idMedicamento}` ).val();
    const presentation = $( `#input-presentation-${idMedicamento}` ).val();
    const concentration = $( `#input-concentration-${idMedicamento}` ).val();
    const volume_flask = $( `#input-volume_flask-${idMedicamento}` ).val();
    const formulation = $( `#input-formulation-${idMedicamento}` ).val();
    const lab = $( `#input-lab-${idMedicamento}` ).val();

    $.ajax({
        url: `http://localhost:8989/api/medicine/${idMedicamento}`,
        type: "PUT",
        data: {
            name: name,
            presentation: presentation,
            concentration: concentration,
            volume_flask: volume_flask,
            formulation: formulation,
            lab: lab
        },
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                location.reload();
            }

        }
      });
}

function deleteMedicamento(idMedicamento) {

    $.ajax({
        url: `http://localhost:8989/api/medicine/${idMedicamento}`,
        type: "DELETE",
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                location.reload();
            }

        }
      });
}

function cadastreMedicamento() {

    const novoNomeMedicamento = $( "#input-novo-Medicamento" ).val();

    console.log(novoNomeMedicamento)

    $.ajax({
        url: `http://localhost:8989/api/medicine`,
        type: "POST",
        data: {
            name: novoNomeMedicamento
        },
        success: function(data, status) {

            if (status === "success") {
                location.reload();
            }

        }
      });
}
