<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{

    protected $table = "permissao";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "name",
        "cadastro_medicamentos",
        "cadastro_medicamentos_ler",
        "cadastro_medicamentos_editar",
        "cadastro_medicamentos_cadastrar",
        "cadastro_medicamentos_excluir",
        "cadastro_sintomas",
        "cadastro_sintomas_ler",
        "cadastro_sintomas_editar",
        "cadastro_sintomas_cadastrar",
        "cadastro_sintomas_excluir",
        "cadastro_diagnosticos",
        "cadastro_diagnosticos_ler",
        "cadastro_diagnosticos_editar",
        "cadastro_diagnosticos_cadastrar",
        "cadastro_diagnosticos_excluir",
        "validacao_documentos",
        "validacao_documentos_ler",
        "validacao_documentos_editar",
        "validacao_documentos_cadastrar",
        "validacao_documentos_excluir",
        "farmacias_parceiras",
        "farmacias_parceiras_ler",
        "farmacias_parceiras_editar",
        "farmacias_parceiras_cadastrar",
        "farmacias_parceiras_excluir",
        "listar_usuarios",
        "listar_usuarios_ler",
        "listar_usuarios_editar",
        "listar_usuarios_cadastrar",
        "listar_usuarios_excluir",
        "permissoes",
        "permissoes_ler",
        "permissoes_editar",
        "permissoes_cadastrar",
        "permissoes_excluir",
        "descontos_promocoes",
        "descontos_promocoes_ler",
        "descontos_promocoes_editar",
        "descontos_promocoes_cadastrar",
        "descontos_promocoes_excluir",
        "extracao_dados",
        "extracao_dados_ler",
        "extracao_dados_editar",
        "extracao_dados_cadastrar",
        "extracao_dados_excluir"
    ];

    public function getNameAttribute($value)
    {
        if($value == "Prescriber") {
            return "Prescritor";
        } 
        if($value == "Patient") {
            return "Paciente";
        }
    }
}
