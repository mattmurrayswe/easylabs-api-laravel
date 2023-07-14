$(document).ready(function() {});

function editDiagnostico(idDiagnostico) {

    const novoNomeSintoma = $( `#input-${idDiagnostico}` ).val();

    $.ajax({
        url: `http://localhost:8989/api/symptom/${idDiagnostico}`,
        type: "PUT",
        data: {
            name: novoNomeSintoma
        },
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                $( `#sintoma-name-${idSintoma}` ).text(novoNomeSintoma);
            }

        }
      });
}

function deleteSintoma(idSintoma) {

    $.ajax({
        url: `http://localhost:8989/api/symptom/${idSintoma}`,
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
