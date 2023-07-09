$(document).ready(function() {
    $( "#editar" ).on( "click", function() {
        alert(2222222);
    });

});

function editSintoma(idSintoma) {

    const novoNomeSintoma = $( `#input-${idSintoma}` ).val();

    $.ajax({
        url: `http://localhost:8989/api/symptom/${idSintoma}`,
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