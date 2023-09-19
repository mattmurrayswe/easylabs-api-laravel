$(document).ready(function() {});

function editSintoma(idSintoma) {

    const novoNomeSintoma = $( `#input-${idSintoma}` ).val();

    $.ajax({
        url: `https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/symptom/${idSintoma}`,
        type: "PUT",
        data: {
            name: novoNomeSintoma
        },
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                $( `#sintoma-name-${idSintoma}` ).text(novoNomeSintoma);
                reloadPageWithModal()
            }

        }
      });
}

function deleteSintoma(idSintoma) {

    $.ajax({
        url: `https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/symptom/${idSintoma}`,
        type: "DELETE",
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                reloadPageWithModal()
            }

        }
      });
}

function cadastreSintoma() {

    const novoNomeSintoma = $( "#input-novo-sintoma" ).val();

    console.log(novoNomeSintoma)

    $.ajax({
        url: `https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/symptom`,
        type: "POST",
        data: {
            name: novoNomeSintoma
        },
        success: function(data, status) {

            if (status === "success") {
                reloadPageWithModal()
            }

        }
      });
}
