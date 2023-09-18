$(document).ready(function() {});

function salvarPermissoes(idPermissao) {

    const cadastro_medicamentos = $(`#cadastro-medicamentos-${idPermissao}`).prop('checked');;
    const cadastro_medicamentos_ler = $(`#cadastro-medicamentos-ler-${idPermissao}`).prop('checked');;
    const cadastro_medicamentos_editar = $(`#cadastro-medicamentos-editar-${idPermissao}`).prop('checked');;
    const cadastro_medicamentos_cadastrar = $(`#cadastro-medicamentos-cadastrar-${idPermissao}`).prop('checked');;
    const cadastro_medicamentos_excluir = $(`#cadastro-medicamentos-excluir-${idPermissao}`).prop('checked');;

    const cadastro_sintomas = $(`#cadastro-sintomas-${idPermissao}`).prop('checked');;
    const cadastro_sintomas_ler = $(`#cadastro-sintomas-ler-${idPermissao}`).prop('checked');;
    const cadastro_sintomas_editar = $(`#cadastro-sintomas-editar-${idPermissao}`).prop('checked');;
    const cadastro_sintomas_cadastrar = $(`#cadastro-sintomas-cadastrar-${idPermissao}`).prop('checked');;
    const cadastro_sintomas_excluir = $(`#cadastro-sintomas-excluir-${idPermissao}`).prop('checked');;

    const cadastro_diagnosticos = $(`#cadastro-diagnosticos-${idPermissao}`).prop('checked');;
    const cadastro_diagnosticos_ler = $(`#cadastro-diagnosticos-ler-${idPermissao}`).prop('checked');;
    const cadastro_diagnosticos_editar = $(`#cadastro-diagnosticos-editar-${idPermissao}`).prop('checked');;
    const cadastro_diagnosticos_cadastrar = $(`#cadastro-diagnosticos-cadastrar-${idPermissao}`).prop('checked');;
    const cadastro_diagnosticos_excluir = $(`#cadastro-diagnosticos-excluir-${idPermissao}`).prop('checked');;

    const validacao_documentos = $(`#validacao-documentos-${idPermissao}`).prop('checked');;
    const validacao_documentos_ler = $(`#validacao-documentos-ler-${idPermissao}`).prop('checked');;
    const validacao_documentos_editar = $(`#validacao-documentos-editar-${idPermissao}`).prop('checked');;
    const validacao_documentos_cadastrar = $(`#validacao-documentos-cadastrar-${idPermissao}`).prop('checked');;
    const validacao_documentos_excluir = $(`#validacao-documentos-excluir-${idPermissao}`).prop('checked');;

    const farmacias_parceiras = $(`#farmacias-parceiras-${idPermissao}`).prop('checked');;
    const farmacias_parceiras_ler = $(`#farmacias-parceiras-ler-${idPermissao}`).prop('checked');;
    const farmacias_parceiras_editar = $(`#farmacias-parceiras-editar-${idPermissao}`).prop('checked');;
    const farmacias_parceiras_cadastrar = $(`#farmacias-parceiras-cadastrar-${idPermissao}`).prop('checked');;
    const farmacias_parceiras_excluir = $(`#farmacias-parceiras-excluir-${idPermissao}`).prop('checked');;

    const listar_usuarios = $(`#listar-usuarios-${idPermissao}`).prop('checked');;
    const listar_usuarios_ler = $(`#listar-usuarios-ler-${idPermissao}`).prop('checked');;
    const listar_usuarios_editar = $(`#listar-usuarios-editar-${idPermissao}`).prop('checked');;
    const listar_usuarios_cadastrar = $(`#listar-usuarios-cadastrar-${idPermissao}`).prop('checked');;
    const listar_usuarios_excluir = $(`#listar-usuarios-excluir-${idPermissao}`).prop('checked');;

    const permissoes = $(`#permissoes-${idPermissao}`).prop('checked');;
    const permissoes_ler = $(`#permissoes-ler-${idPermissao}`).prop('checked');;
    const permissoes_editar = $(`#permissoes-editar-${idPermissao}`).prop('checked');;
    const permissoes_cadastrar = $(`#permissoes-cadastrar-${idPermissao}`).prop('checked');;
    const permissoes_excluir = $(`#permissoes-excluir-${idPermissao}`).prop('checked');;

    const descontos_promocoes = $(`#descontos-promocoes-${idPermissao}`).prop('checked');;
    const descontos_promocoes_ler = $(`#descontos-promocoes-ler-${idPermissao}`).prop('checked');;
    const descontos_promocoes_editar = $(`#descontos-promocoes-editar-${idPermissao}`).prop('checked');;
    const descontos_promocoes_cadastrar = $(`#descontos-promocoes-cadastrar-${idPermissao}`).prop('checked');;
    const descontos_promocoes_excluir = $(`#descontos-promocoes-excluir-${idPermissao}`).prop('checked');;

    const extracao_dados = $(`#extracao-dados-${idPermissao}`).prop('checked');;
    const extracao_dados_ler = $(`#extracao-dados-ler-${idPermissao}`).prop('checked');;
    const extracao_dados_editar = $(`#extracao-dados-editar-${idPermissao}`).prop('checked');;
    const extracao_dados_cadastrar = $(`#extracao-dados-cadastrar-${idPermissao}`).prop('checked');;
    const extracao_dados_excluir = $(`#extracao-dados-excluir-${idPermissao}`).prop('checked');;

    console.log(cadastro_medicamentos)
    console.log(cadastro_medicamentos_ler)
    console.log(cadastro_medicamentos_editar)
    console.log(cadastro_medicamentos_cadastrar)
    console.log(cadastro_medicamentos_excluir)
    console.log(cadastro_sintomas)
    console.log(cadastro_sintomas_ler)
    console.log(cadastro_sintomas_editar)
    console.log(cadastro_sintomas_cadastrar)
    console.log(cadastro_sintomas_excluir)
    console.log(cadastro_diagnosticos)
    console.log(cadastro_diagnosticos_ler)
    console.log(cadastro_diagnosticos_editar)
    console.log(cadastro_diagnosticos_cadastrar)
    console.log(cadastro_diagnosticos_excluir)
    console.log(validacao_documentos)
    console.log(validacao_documentos_ler)
    console.log(validacao_documentos_editar)
    console.log(validacao_documentos_cadastrar)
    console.log(validacao_documentos_excluir)
    console.log(farmacias_parceiras)
    console.log(farmacias_parceiras_ler)
    console.log(farmacias_parceiras_editar)
    console.log(farmacias_parceiras_cadastrar)
    console.log(farmacias_parceiras_excluir)
    console.log(listar_usuarios)
    console.log(listar_usuarios_ler)
    console.log(listar_usuarios_editar)
    console.log(listar_usuarios_cadastrar)
    console.log(listar_usuarios_excluir)
    console.log(permissoes)
    console.log(permissoes_ler)
    console.log(permissoes_editar)
    console.log(permissoes_cadastrar)
    console.log(permissoes_excluir)
    console.log(descontos_promocoes)
    console.log(descontos_promocoes_ler)
    console.log(descontos_promocoes_editar)
    console.log(descontos_promocoes_cadastrar)
    console.log(descontos_promocoes_excluir)
    console.log(extracao_dados)
    console.log(extracao_dados_ler)
    console.log(extracao_dados_editar)
    console.log(extracao_dados_cadastrar)
    console.log(extracao_dados_excluir)

    $.ajax({
        url: `http://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/permissao/${idPermissao}`,
        type: "PUT",
        data: {
            cadastro_medicamentos : cadastro_medicamentos,
            cadastro_medicamentos_ler : cadastro_medicamentos_ler,
            cadastro_medicamentos_editar : cadastro_medicamentos_editar,
            cadastro_medicamentos_cadastrar : cadastro_medicamentos_cadastrar,
            cadastro_medicamentos_excluir : cadastro_medicamentos_excluir,
            cadastro_sintomas : cadastro_sintomas,
            cadastro_sintomas_ler : cadastro_sintomas_ler,
            cadastro_sintomas_editar : cadastro_sintomas_editar,
            cadastro_sintomas_cadastrar : cadastro_sintomas_cadastrar,
            cadastro_sintomas_excluir : cadastro_sintomas_excluir,
            cadastro_diagnosticos : cadastro_diagnosticos,
            cadastro_diagnosticos_ler : cadastro_diagnosticos_ler,
            cadastro_diagnosticos_editar : cadastro_diagnosticos_editar,
            cadastro_diagnosticos_cadastrar : cadastro_diagnosticos_cadastrar,
            cadastro_diagnosticos_excluir : cadastro_diagnosticos_excluir,
            validacao_documentos : validacao_documentos,
            validacao_documentos_ler : validacao_documentos_ler,
            validacao_documentos_editar : validacao_documentos_editar,
            validacao_documentos_cadastrar : validacao_documentos_cadastrar,
            validacao_documentos_excluir : validacao_documentos_excluir,
            farmacias_parceiras : farmacias_parceiras,
            farmacias_parceiras_ler : farmacias_parceiras_ler,
            farmacias_parceiras_editar : farmacias_parceiras_editar,
            farmacias_parceiras_cadastrar : farmacias_parceiras_cadastrar,
            farmacias_parceiras_excluir : farmacias_parceiras_excluir,
            listar_usuarios : listar_usuarios,
            listar_usuarios_ler : listar_usuarios_ler,
            listar_usuarios_editar : listar_usuarios_editar,
            listar_usuarios_cadastrar : listar_usuarios_cadastrar,
            listar_usuarios_excluir : listar_usuarios_excluir,
            permissoes : permissoes,
            permissoes_ler : permissoes_ler,
            permissoes_editar : permissoes_editar,
            permissoes_cadastrar : permissoes_cadastrar,
            permissoes_excluir : permissoes_excluir,
            descontos_promocoes : descontos_promocoes,
            descontos_promocoes_ler : descontos_promocoes_ler,
            descontos_promocoes_editar : descontos_promocoes_editar,
            descontos_promocoes_cadastrar : descontos_promocoes_cadastrar,
            descontos_promocoes_excluir : descontos_promocoes_excluir,
            extracao_dados : extracao_dados,
            extracao_dados_ler : extracao_dados_ler,
            extracao_dados_editar : extracao_dados_editar,
            extracao_dados_cadastrar : extracao_dados_cadastrar,
            extracao_dados_excluir : extracao_dados_excluir
        },
        success: function(data, status) {

            if (status === "success") {
                reloadPageWithModal()
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
