// $(document).ready(function() {});

function enviarMensagem(entity, id, name, chatId) {
    const message = $(`#mensagem-${chatId}`).val();
    let data;

    console.log(entity);
    console.log(id);
    console.log(name);
    console.log(chatId);
    console.log(message);

    const entity_path = "presc"

    if (entity === 'prescriber') {
        data = {
            prescriber_id: id,
            prescriber_name: name,
            message: message,
            admin_replying: true
        };
    } else {
        entity_path = "patien"
        data = {
            patient_id: id,
            patient_name: name,
            message: message,
            admin_replying: true
        };
    }

    $.ajax({
        url: `${ENDPOINT_JS}/api/${entity_path}/message/admin`,
        type: "POST",
        data: data,
        success: function (data, status) {
            if (status === "success") {
                reloadPageWithModal();
            }
        }
    });
}
