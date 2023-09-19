$(document).ready(function() {});

function addInputSintomaAoDiagnostico(idDiagnosticoModal) {

    if (idDiagnosticoModal === false) {

        $( `#select-sintomas` ).clone().insertBefore( `#button-select-sintomas` );
        $( `#select-sintomas` ).removeClass( `hidden` );   
        $( `#hidden-select-sintomas` ).addClass( `select-sintomas` );   

    } else {

        $( `#select-sintomas-${idDiagnosticoModal}` ).clone().insertBefore( `#button-select-sintomas-${idDiagnosticoModal}`);
        $( `#select-sintomas-${idDiagnosticoModal}` ).removeClass("hidden");
        $( `#hidden-select-sintomas-${idDiagnosticoModal}` ).addClass(`select-sintomas-${idDiagnosticoModal}`); 

    }
}

function deleteSelectPlusButton(element) {

    $(element).parent().remove();

}

function deleteMed(idDiagnostico, idMed) {

    $(`.select-medicamentos-${idDiagnostico}-${idMed}`).remove();

}

function addInputMedicamentoAoDiagnostico(idDiagnosticoModal) {

    if (idDiagnosticoModal === false) {

        $( `#select-medicamentos` ).clone().insertBefore( `#button-select-medicamentos` );   
        $( `#select-medicamentos` ).removeClass( `hidden` );   
        $( `#hidden-select-medicamentos` ).addClass( `select-medicamentos` );   

    } else {

        $( `#select-medicamentos-${idDiagnosticoModal}`).clone().insertBefore(`#button-select-medicamentos-${idDiagnosticoModal}` );
        $( `#select-medicamentos-${idDiagnosticoModal}` ).removeClass("hidden");   
        $( `#hidden-select-medicamentos-${idDiagnosticoModal}` ).addClass(`select-medicamentos-${idDiagnosticoModal}` );   

    }
}

function editDiagnostico(idDiagnostico) {

    let name = $(`#diagnose-name-${idDiagnostico}`).val();

    let sintomasIds = $(`.select-sintomas-${idDiagnostico}`).map(function() {

        return this.value

    }).get()

    console.log(sintomasIds)

    let medicamentosIds = $(`.select-medicamentos-${idDiagnostico}`).map(function() {

        return this.value

    }).get()

    console.log(medicamentosIds)

    $.ajax({
        url: `${ENDPOINT_JS}/api/diagnose/${idDiagnostico}`,
        type: "PUT",
        data: {
            name: name,
            id_diagnostico: idDiagnostico,
            sintomas_ids: sintomasIds,
            medicamentos_ids: medicamentosIds
        },
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                reloadPageWithModal()
            }

        }
      });
}

function deleteDiagnostico(idDiagnostico) {

    $.ajax({
        url: `https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/diagnose/${idDiagnostico}`,
        type: "DELETE",
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                reloadPageWithModal()
            }

        }
      });
}

function cadastreDiagnostico() {

    let name = $('#nome-novo-diagnostico').val()

    console.log(name)

    let hasSymptoms = $(".select-sintomas").map(function() {

        return { "symptom_id": this.value };

    }).get();

    console.log(hasSymptoms)

    let hasSuggestedMedicines = $(`.select-medicamentos`).map(function() {

        return { "medicine_id" : this.value };

    }).get()

    console.log(hasSuggestedMedicines)

    data = {
        name: name,
        has_symptoms: hasSymptoms,
        has_suggested_medicines: hasSuggestedMedicines
    }

    console.log(data)

    $.ajax({
        url: `${ENDPOINT_JS}/api/diagnose`,
        type: "POST",
        data: {
            name: name,
            has_symptoms: hasSymptoms,
            has_suggested_medicines: hasSuggestedMedicines
        },
        success: function(data, status) {

            if (status === "success") {
                reloadPageWithModal()
            }

        }
      });
}
