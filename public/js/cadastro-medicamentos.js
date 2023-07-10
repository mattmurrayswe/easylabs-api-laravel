$(document).ready(function() {});

function alimenteModalMedicamentoEdit(idMedicamento) {

    $( `#input-name-${idMedicamento}` ).val($( `#name-${idMedicamento}`).text() );
    $( `#input-presentation-${idMedicamento}` ).val($( `#presentation-${idMedicamento}`).text() );
    $( `#input-concentration-${idMedicamento}` ).val($( `#concentration-${idMedicamento}`).text() );
    $( `#input-volume_flask-${idMedicamento}` ).val($( `#volume_flask-${idMedicamento}`).text() );
    $( `#input-formulation-${idMedicamento}` ).val($( `#formulation-${idMedicamento}`).text() );
    $( `#input-lab-${idMedicamento}` ).val($( `#lab-${idMedicamento}`).text() );

}

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

    const name = $( `#input-add-name` ).val();
    const presentation = $( `#input-add-presentation` ).val();
    const concentration = $( `#input-add-concentration` ).val();
    const volume_flask = $( `#input-add-volume_flask` ).val();
    const formulation = $( `#input-add-formulation` ).val();
    const lab = $( `#input-add-lab` ).val();

    $.ajax({
        url: `http://localhost:8989/api/medicine`,
        type: "POST",
        data: {
            name: name,
            presentation: presentation,
            concentration: concentration,
            volume_flask: volume_flask,
            formulation: formulation,
            lab: lab
        },
        success: function(data, status) {

            if (status === "success") {
                location.reload();
            }

        }
      });
}
