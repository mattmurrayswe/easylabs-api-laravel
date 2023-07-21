<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Treatment\StoreTreatmentRequest;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Medicine;
use App\Models\Patient;
use App\Models\Permissao;
use App\Models\Prescriber;
use App\Models\TreatmentsRef;
use App\Models\TreatmentHasMedicines;
use App\Service\TreatmentService;
use Illuminate\Http\Request;

class PermissaoController extends Controller
{

      /**
     * The error message.
     *
     * @var string
     */
    protected $errorMessage;

    /**
     * @var TreatmentService
     */
    private TreatmentService $treatmentService;

    public function __construct(TreatmentService $treatmentService)
    {
        $this->treatmentService = $treatmentService;
        $this->errorMessage = "Permissao nao encontrada!";

    }

    public function store(Request $request)
    {
        try {
            $permissao = Permissao::create([
                "name" => $request->name
            ]);
        // $permissao = Permissao::create([
        //     "cadastro_medicamentos" => $request->cadastro_medicamentos,
        //     "cadastro_medicamentos_ler" => $request->cadastro_medicamentos_ler,
        //     "cadastro_medicamentos_editar" => $request->cadastro_medicamentos_editar,
        //     "cadastro_medicamentos_cadastrar" => $request->cadastro_medicamentos_cadastrar,
        //     "cadastro_medicamentos_excluir" => $request->cadastro_medicamentos_excluir,
        //     "cadastro_sintomas" => $request->cadastro_sintomas,
        //     "cadastro_sintomas_ler" => $request->cadastro_sintomas_ler,
        //     "cadastro_sintomas_editar" => $request->cadastro_sintomas_editar,
        //     "cadastro_sintomas_cadastrar" => $request->cadastro_sintomas_cadastrar,
        //     "cadastro_sintomas_excluir" => $request->cadastro_sintomas_excluir,
        //     "cadastro_diagnosticos" => $request->cadastro_diagnosticos,
        //     "cadastro_diagnosticos_ler" => $request->cadastro_diagnosticos_ler,
        //     "cadastro_diagnosticos_editar" => $request->cadastro_diagnosticos_editar,
        //     "cadastro_diagnosticos_cadastrar" => $request->cadastro_diagnosticos_cadastrar,
        //     "cadastro_diagnosticos_excluir" => $request->cadastro_diagnosticos_excluir,
        //     "validacao_documentos" => $request->validacao_documentos,
        //     "validacao_documentos_ler" => $request->validacao_documentos_ler,
        //     "validacao_documentos_editar" => $request->validacao_documentos_editar,
        //     "validacao_documentos_cadastrar" => $request->validacao_documentos_cadastrar,
        //     "validacao_documentos_excluir" => $request->validacao_documentos_excluir,
        //     "farmacias_parceiras" => $request->farmacias_parceiras,
        //     "farmacias_parceiras_ler" => $request->farmacias_parceiras_ler,
        //     "farmacias_parceiras_editar" => $request->farmacias_parceiras_editar,
        //     "farmacias_parceiras_cadastrar" => $request->farmacias_parceiras_cadastrar,
        //     "farmacias_parceiras_excluir" => $request->farmacias_parceiras_excluir,
        //     "listar_usuarios" => $request->listar_usuarios,
        //     "listar_usuarios_ler" => $request->listar_usuarios_ler,
        //     "listar_usuarios_editar" => $request->listar_usuarios_editar,
        //     "listar_usuarios_cadastrar" => $request->listar_usuarios_cadastrar,
        //     "listar_usuarios_excluir" => $request->listar_usuarios_excluir,
        //     "permissoes" => $request->permissoes,
        //     "permissoes_ler" => $request->permissoes_ler,
        //     "permissoes_editar" => $request->permissoes_editar,
        //     "permissoes_cadastrar" => $request->permissoes_cadastrar,
        //     "permissoes_excluir" => $request->permissoes_excluir,
        //     "descontos_promocoes" => $request->descontos_promocoes,
        //     "descontos_promocoes_ler" => $request->descontos_promocoes_ler,
        //     "descontos_promocoes_editar" => $request->descontos_promocoes_editar,
        //     "descontos_promocoes_cadastrar" => $request->descontos_promocoes_cadastrar,
        //     "descontos_promocoes_excluir" => $request->descontos_promocoes_excluir,
        //     "extracao_dados" => $request->extracao_dados,
        //     "extracao_dados_ler" => $request->extracao_dados_ler,
        //     "extracao_dados_editar" => $request->extracao_dados_editar,
        //     "extracao_dados_cadastrar" => $request->extracao_dados_cadastrar,
        //     "extracao_dados_excluir" => $request->extracao_dados_excluir
        // ]);

            return response()->json(new SuccessResource([
                "message" => "Permissao criada com sucesso!",
                "treatment_id" => $permissao->id
            ]), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
        
    }

    public function editPermissao(Request $request, $id)
    {
        try {
            
        Permissao::where("id", $id)->update([
            "cadastro_medicamentos" => $request->cadastro_medicamentos,
            "cadastro_medicamentos_ler" => $request->cadastro_medicamentos_ler,
            "cadastro_medicamentos_editar" => $request->cadastro_medicamentos_editar,
            "cadastro_medicamentos_cadastrar" => $request->cadastro_medicamentos_cadastrar,
            "cadastro_medicamentos_excluir" => $request->cadastro_medicamentos_excluir,
            "cadastro_sintomas" => $request->cadastro_sintomas,
            "cadastro_sintomas_ler" => $request->cadastro_sintomas_ler,
            "cadastro_sintomas_editar" => $request->cadastro_sintomas_editar,
            "cadastro_sintomas_cadastrar" => $request->cadastro_sintomas_cadastrar,
            "cadastro_sintomas_excluir" => $request->cadastro_sintomas_excluir,
            "cadastro_diagnosticos" => $request->cadastro_diagnosticos,
            "cadastro_diagnosticos_ler" => $request->cadastro_diagnosticos_ler,
            "cadastro_diagnosticos_editar" => $request->cadastro_diagnosticos_editar,
            "cadastro_diagnosticos_cadastrar" => $request->cadastro_diagnosticos_cadastrar,
            "cadastro_diagnosticos_excluir" => $request->cadastro_diagnosticos_excluir,
            "validacao_documentos" => $request->validacao_documentos,
            "validacao_documentos_ler" => $request->validacao_documentos_ler,
            "validacao_documentos_editar" => $request->validacao_documentos_editar,
            "validacao_documentos_cadastrar" => $request->validacao_documentos_cadastrar,
            "validacao_documentos_excluir" => $request->validacao_documentos_excluir,
            "farmacias_parceiras" => $request->farmacias_parceiras,
            "farmacias_parceiras_ler" => $request->farmacias_parceiras_ler,
            "farmacias_parceiras_editar" => $request->farmacias_parceiras_editar,
            "farmacias_parceiras_cadastrar" => $request->farmacias_parceiras_cadastrar,
            "farmacias_parceiras_excluir" => $request->farmacias_parceiras_excluir,
            "listar_usuarios" => $request->listar_usuarios,
            "listar_usuarios_ler" => $request->listar_usuarios_ler,
            "listar_usuarios_editar" => $request->listar_usuarios_editar,
            "listar_usuarios_cadastrar" => $request->listar_usuarios_cadastrar,
            "listar_usuarios_excluir" => $request->listar_usuarios_excluir,
            "permissoes" => $request->permissoes,
            "permissoes_ler" => $request->permissoes_ler,
            "permissoes_editar" => $request->permissoes_editar,
            "permissoes_cadastrar" => $request->permissoes_cadastrar,
            "permissoes_excluir" => $request->permissoes_excluir,
            "descontos_promocoes" => $request->descontos_promocoes,
            "descontos_promocoes_ler" => $request->descontos_promocoes_ler,
            "descontos_promocoes_editar" => $request->descontos_promocoes_editar,
            "descontos_promocoes_cadastrar" => $request->descontos_promocoes_cadastrar,
            "descontos_promocoes_excluir" => $request->descontos_promocoes_excluir,
            "extracao_dados" => $request->extracao_dados,
            "extracao_dados_ler" => $request->extracao_dados_ler,
            "extracao_dados_editar" => $request->extracao_dados_editar,
            "extracao_dados_cadastrar" => $request->extracao_dados_cadastrar,
            "extracao_dados_excluir" => $request->extracao_dados_excluir
        ]);

            return response()->json(new SuccessResource("Sucesso ao editar a Permissao"), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }

    }

    public function editPermissaoUser(Request $request)
    {
        try {
        
        if ($request->id_permissao_old == 4) {
            
            Prescriber::where("id", $request->id_user)->update([
                "id_permissao" => $request->id_permissao_new,
            ]);
        }
        
        if ($request->id_permissao_old == 5) {            
            
            Patient::where("id", $request->id_user)->update([
                "id_permissao" => $request->id_permissao_new,
            ]);
        }


            return response()->json(new SuccessResource("Sucesso ao editar a Permissao"), 200);
            
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }

    }
}
