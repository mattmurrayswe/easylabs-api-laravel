$(document).ready(function() {});

function addInputSintomaAoDiagnostico(idDiagnosticoModal) {
    $( `#select-sintomas-${idDiagnosticoModal}` ).clone().insertBefore( `#button-select-sintomas-${idDiagnosticoModal}` );
}

function addInputMedicamentoAoDiagnostico(idDiagnosticoModal) {
    $( `#select-medicamentos-${idDiagnosticoModal}` ).clone().insertBefore( `#button-select-medicamentos-${idDiagnosticoModal}` );    
}

function editDiagnostico(idDiagnostico) {

    let sintomasIds = $(`.select-sintomas-${idDiagnostico}`).map(function() {

        return this.value

    }).get()

    console.log(sintomasIds)

    let medicamentosIds = $(`.select-medicamentos-${idDiagnostico}`).map(function() {

        return this.value

    }).get()

    console.log(medicamentosIds)

    $.ajax({
        url: `http://localhost:8989/api/diagnose/${idDiagnostico}`,
        type: "PUT",
        data: {
            id_diagnostico: idDiagnostico,
            sintomas_ids: sintomasIds,
            medicamentos_ids: medicamentosIds
        },
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                location.reload();
            }

        }
      });
}

function deleteDiagnostico(idDiagnostico) {

    $.ajax({
        url: `http://localhost:8989/api/diagnose/${idDiagnostico}`,
        type: "DELETE",
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                location.reload();
            }

        }
      });
}

function cadastreSintoma() {

    const novoNomeSintoma = $( "#input-novo-sintoma" ).val();

    console.log(novoNomeSintoma)

    $.ajax({
        url: `http://localhost:8989/api/symptom`,
        type: "POST",
        data: {
            name: novoNomeSintoma
        },
        success: function(data, status) {

            if (status === "success") {
                location.reload();
            }

        }
      });
}
