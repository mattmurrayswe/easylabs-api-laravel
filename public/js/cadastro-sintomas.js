$(document).ready(function() {
    $( "#editar" ).on( "click", function() {
        alert(2222222);
    });

});

function editSintoma(idSintoma) {

    const novoNomeSintoma = $( `#input-${idSintoma}` ).val();
    
    $.post("http://localhost:8989/api/symptom",
    {
      name: novoNomeSintoma
    },
    function(data, status){

        if (status === "success") {
            $( `#sintoma-name-${idSintoma}` ).text(novoNomeSintoma);
        }
    });
}

function deleteSintoma(idSintoma) {

    $.delete(`http://localhost:8989/api/symptom/${idSintoma}`,
    {},
    function(data, status){

        if (status === "success") {
            location.reload();
        }
    });
}