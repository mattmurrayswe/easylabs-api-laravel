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
                openAlert()
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
                openAlert()
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
                openAlert()
            }

        }
      });
}

function openAlert() {
    const alert = document.getElementById("alert-3");
    if (alert) {
      alert.style.display = "flex";
    }
}
  
  // To close the alert, you can create a similar function:
  function closeAlert() {
    const alert = document.getElementById("alert-3");
    if (alert) {
      alert.style.display = "none";
    }
}
