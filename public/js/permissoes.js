$(document).ready(function() {});

function salvarPermissoes(idPermissao) {

    const cadastro_medicamentos = $(`#cadastro-medicamentos-${idPermissao}`).val();
    const cadastro_medicamentos_ler = $(`#cadastro-medicamentos-ler-${idPermissao}`).val();
    const cadastro_medicamentos_editar = $(`#cadastro-medicamentos-editar-${idPermissao}`).val();
    const cadastro_medicamentos_cadastrar = $(`#cadastro-medicamentos-cadastrar-${idPermissao}`).val();
    const cadastro_medicamentos_excluir = $(`#cadastro-medicamentos-excluir-${idPermissao}`).val();

    const cadastro_sintomas = $(`#cadastro-sintomas-${idPermissao}`).val();
    const cadastro_sintomas_ler = $(`#cadastro-sintomas-ler-${idPermissao}`).val();
    const cadastro_sintomas_editar = $(`#cadastro-sintomas-editar-${idPermissao}`).val();
    const cadastro_sintomas_cadastrar = $(`#cadastro-sintomas-cadastrar-${idPermissao}`).val();
    const cadastro_sintomas_excluir = $(`#cadastro-sintomas-excluir-${idPermissao}`).val();

    const cadastro_diagnosticos = $(`#cadastro-diagnosticos-${idPermissao}`).val();
    const cadastro_diagnosticos_ler = $(`#cadastro-diagnosticos-ler-${idPermissao}`).val();
    const cadastro_diagnosticos_editar = $(`#cadastro-diagnosticos-editar-${idPermissao}`).val();
    const cadastro_diagnosticos_cadastrar = $(`#cadastro-diagnosticos-cadastrar-${idPermissao}`).val();
    const cadastro_diagnosticos_excluir = $(`#cadastro-diagnosticos-excluir-${idPermissao}`).val();

    const validacao_documentos = $(`#validacao-documentos-${idPermissao}`).val();
    const validacao_documentos_ler = $(`#validacao-documentos-ler-${idPermissao}`).val();
    const validacao_documentos_editar = $(`#validacao-documentos-editar-${idPermissao}`).val();
    const validacao_documentos_cadastrar = $(`#validacao-documentos-cadastrar-${idPermissao}`).val();
    const validacao_documentos_excluir = $(`#validacao-documentos-excluir-${idPermissao}`).val();

    const farmacias_parceiras = $(`#farmacias-parceiras-${idPermissao}`).val();
    const farmacias_parceiras_ler = $(`#farmacias-parceiras-ler-${idPermissao}`).val();
    const farmacias_parceiras_editar = $(`#farmacias-parceiras-editar-${idPermissao}`).val();
    const farmacias_parceiras_cadastrar = $(`#farmacias-parceiras-cadastrar-${idPermissao}`).val();
    const farmacias_parceiras_excluir = $(`#farmacias-parceiras-excluir-${idPermissao}`).val();

    const listar_usuarios = $(`#listar-usuarios-${idPermissao}`).val();
    const listar_usuarios_ler = $(`#listar-usuarios-ler-${idPermissao}`).val();
    const listar_usuarios_editar = $(`#listar-usuarios-editar-${idPermissao}`).val();
    const listar_usuarios_cadastrar = $(`#listar-usuarios-cadastrar-${idPermissao}`).val();
    const listar_usuarios_excluir = $(`#listar-usuarios-excluir-${idPermissao}`).val();

    const permissoes = $(`#permissoes-${idPermissao}`).val();
    const permissoes_ler = $(`#permissoes-ler-${idPermissao}`).val();
    const permissoes_editar = $(`#permissoes-editar-${idPermissao}`).val();
    const permissoes_cadastrar = $(`#permissoes-cadastrar-${idPermissao}`).val();
    const permissoes_excluir = $(`#permissoes-excluir-${idPermissao}`).val();

    const descontos_promocoes = $(`#descontos-promocoes-${idPermissao}`).val();
    const descontos_promocoes_ler = $(`#descontos-promocoes-ler-${idPermissao}`).val();
    const descontos_promocoes_editar = $(`#descontos-promocoes-editar-${idPermissao}`).val();
    const descontos_promocoes_cadastrar = $(`#descontos-promocoes-cadastrar-${idPermissao}`).val();
    const descontos_promocoes_excluir = $(`#descontos-promocoes-excluir-${idPermissao}`).val();

    const extracao_dados = $(`#extracao-dados-${idPermissao}`).val();
    const extracao_dados_ler = $(`#extracao-dados-ler-${idPermissao}`).val();
    const extracao_dados_editar = $(`#extracao-dados-editar-${idPermissao}`).val();
    const extracao_dados_cadastrar = $(`#extracao-dados-cadastrar-${idPermissao}`).val();
    const extracao_dados_excluir = $(`#extracao-dados-excluir-${idPermissao}`).val();

    $.ajax({
        url: `https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/api/valide/${docType}/${idPermissao}`,
        type: "PUT",
        data: {
            is_valid : isValid,
            motivo : motivo
        },
        success: function(data, status) {

            if (status === "success") {
                
            }
        }
    });
}
