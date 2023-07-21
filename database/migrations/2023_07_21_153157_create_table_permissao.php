<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('permissao');
        Schema::create('permissao', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("cadastro_medicamentos")->default("false");
            $table->string("cadastro_medicamentos_ler")->default("false");
            $table->string("cadastro_medicamentos_editar")->default("false");
            $table->string("cadastro_medicamentos_cadastrar")->default("false");
            $table->string("cadastro_medicamentos_excluir")->default("false");
            $table->string("cadastro_sintomas")->default("false");
            $table->string("cadastro_sintomas_ler")->default("false");
            $table->string("cadastro_sintomas_editar")->default("false");
            $table->string("cadastro_sintomas_cadastrar")->default("false");
            $table->string("cadastro_sintomas_excluir")->default("false");
            $table->string("cadastro_diagnosticos")->default("false");
            $table->string("cadastro_diagnosticos_ler")->default("false");
            $table->string("cadastro_diagnosticos_editar")->default("false");
            $table->string("cadastro_diagnosticos_cadastrar")->default("false");
            $table->string("cadastro_diagnosticos_excluir")->default("false");
            $table->string("validacao_documentos")->default("false");
            $table->string("validacao_documentos_ler")->default("false");
            $table->string("validacao_documentos_editar")->default("false");
            $table->string("validacao_documentos_cadastrar")->default("false");
            $table->string("validacao_documentos_excluir")->default("false");
            $table->string("farmacias_parceiras")->default("false");
            $table->string("farmacias_parceiras_ler")->default("false");
            $table->string("farmacias_parceiras_editar")->default("false");
            $table->string("farmacias_parceiras_cadastrar")->default("false");
            $table->string("farmacias_parceiras_excluir")->default("false");
            $table->string("listar_usuarios")->default("false");
            $table->string("listar_usuarios_ler")->default("false");
            $table->string("listar_usuarios_editar")->default("false");
            $table->string("listar_usuarios_cadastrar")->default("false");
            $table->string("listar_usuarios_excluir")->default("false");
            $table->string("permissoes")->default("false");
            $table->string("permissoes_ler")->default("false");
            $table->string("permissoes_editar")->default("false");
            $table->string("permissoes_cadastrar")->default("false");
            $table->string("permissoes_excluir")->default("false");
            $table->string("descontos_promocoes")->default("false");
            $table->string("descontos_promocoes_ler")->default("false");
            $table->string("descontos_promocoes_editar")->default("false");
            $table->string("descontos_promocoes_cadastrar")->default("false");
            $table->string("descontos_promocoes_excluir")->default("false");
            $table->string("extracao_dados")->default("false");
            $table->string("extracao_dados_ler")->default("false");
            $table->string("extracao_dados_editar")->default("false");
            $table->string("extracao_dados_cadastrar")->default("false");
            $table->string("extracao_dados_excluir")->default("false");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissao');
    }
};
