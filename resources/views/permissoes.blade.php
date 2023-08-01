@include('components.header')

<body>
    <div class="flex">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 ml-[20%] p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/apps.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                        <p>Permissões
                        </p>
                    </a>
                </div>
                <div id="perfil-administrador flex content-center" class="text-gray-900 text-xl font-medium underline">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
            <div id="tabela-medicamentos" class="h-5/6 my-20 rounded-xl shadow">
                <table class="table-auto w-full h-full text-xs rounded-xl">
                    <thead class="h-16">
                        <tr class="bg-gray-800">
                            <th class="rounded-tl-xl px-4">
                                <p class="flex text-white">Nome da Permissão</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">ID da Permissão</p>
                            </th>
                            <th class="rounded-tr-xl px-4">
                                <p class="flex justify-end text-white">Visualizar/Editar</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        <tr class="h-10 bg-gray-50">
                            <td class="px-4">Administrador Master</td>
                            <td class="px-4">1</td>
                            <td data-modal-target="edit-modal-1" data-modal-toggle="edit-modal-1" class="px-4 underline decoration-blue-400 decoration-2 hover:text-blue-600 focus:text-red">
                                <p class="flex justify-end">Visualizar/Editar</p>
                            </td>
                        </tr>
                        <tr class="h-10 bg-gray-50">
                            <td class="px-4">Admin</td>
                            <td class="px-4">2</td>
                            <td data-modal-target="edit-modal-2" data-modal-toggle="edit-modal-2" class="px-4 underline decoration-blue-400 decoration-2 hover:text-blue-600 focus:text-red">
                                <p class="flex justify-end">Visualizar/Editar</p>
                            </td>
                        </tr>
                        <tr class="h-10 bg-gray-50">
                            <td class="px-4">Captador</td>
                            <td class="px-4">3</td>
                            <td data-modal-target="edit-modal-3" data-modal-toggle="edit-modal-3" class="px-4 underline decoration-blue-400 decoration-2 hover:text-blue-600 focus:text-red">
                                <p class="flex justify-end">Visualizar/Editar</p>
                            </td>
                        </tr>
                        <tr class="h-10 bg-gray-50">
                            <td class="px-4">Prescritor</td>
                            <td class="px-4">4</td>
                            <td data-modal-target="edit-modal-4" data-modal-toggle="edit-modal-4" class="px-4 underline decoration-blue-400 decoration-2 hover:text-blue-600 focus:text-red">
                                <p class="flex justify-end">Visualizar/Editar</p>
                            </td>
                        </tr>
                        <tr class="h-10 bg-gray-50">
                            <td class="px-4">Paciente</td>
                            <td class="px-4">5</td>
                            <td data-modal-target="edit-modal-5" data-modal-toggle="edit-modal-5" class="px-4 underline decoration-blue-400 decoration-2 hover:text-blue-600 focus:text-red">
                                <p class="flex justify-end">Visualizar/Editar</p>
                            </td>
                        </tr>
                        <tr class="bg-gray-800 h-6">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4"></td>
                            <td class="px-4 rounded-br-xl">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            @foreach ($permissao as $p)
            <div data-modal-backdrop="static" id="edit-modal-{{ $p->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Editar
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="edit-modal-{{ $p->id }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="hidden" id="cadastro-medicamentos-{{ $p->id }}" value="{{ $p->cadastro_medicamentos }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Cadastro Medicamentos</label>
                                </div>
                                <div class="flex">
                                    @if($p->cadastro_medicamentos_ler === "true")
                                    <input type="checkbox" checked name="cadastro-medicamentos-{{ $p->id }}" id="cadastro-medicamentos-ler-{{ $p->id }}" value="{{ $p->cadastro_medicamentos_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-medicamentos-{{ $p->id }}" id="cadastro-medicamentos-ler-{{ $p->id }}" value="{{ $p->cadastro_medicamentos_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Ler</label>
                                    @if($p->cadastro_medicamentos_editar === "true")
                                    <input type="checkbox" checked name="cadastro-medicamentos-{{ $p->id }}" id="cadastro-medicamentos-editar-{{ $p->id }}" value="{{ $p->cadastro_medicamentos_editar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-medicamentos-{{ $p->id }}" id="cadastro-medicamentos-editar-{{ $p->id }}" value="{{ $p->cadastro_medicamentos_editar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Editar</label>
                                    @if($p->cadastro_medicamentos_cadastrar === "true")
                                    <input type="checkbox" checked name="cadastro-medicamentos-{{ $p->id }}" id="cadastro-medicamentos-cadastrar-{{ $p->id }}" value="{{ $p->cadastro_medicamentos_cadastrar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-medicamentos-{{ $p->id }}" id="cadastro-medicamentos-cadastrar-{{ $p->id }}" value="{{ $p->cadastro_medicamentos_cadastrar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Cadastrar</label>
                                    @if($p->cadastro_medicamentos_excluir === "true")
                                    <input type="checkbox" checked name="cadastro-medicamentos-{{ $p->id }}" id="cadastro-medicamentos-excluir-{{ $p->id }}" value="{{ $p->cadastro_medicamentos_excluir }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-medicamentos-{{ $p->id }}" id="cadastro-medicamentos-excluir-{{ $p->id }}" value="{{ $p->cadastro_medicamentos_excluir }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Excluir</label>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="hidden" id="cadastro-sintomas-{{ $p->id }}" value="true" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Cadastro Sintomas</label>
                                </div>
                                <div class="flex">
                                    @if($p->cadastro_sintomas_ler === "true")
                                    <input type="checkbox" checked name="cadastro-sintomas-{{ $p->id }}" id="cadastro-sintomas-ler-{{ $p->id }}" value="{{ $p->cadastro_sintomas_ler }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-sintomas-{{ $p->id }}" id="cadastro-sintomas-ler-{{ $p->id }}" value="{{ $p->cadastro_sintomas_ler }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Ler</label>
                                    @if($p->cadastro_sintomas_editar === "true")
                                    <input type="checkbox" checked name="cadastro-sintomas-{{ $p->id }}" id="cadastro-sintomas-editar-{{ $p->id }}" value="{{ $p->cadastro_sintomas_editar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-sintomas-{{ $p->id }}" id="cadastro-sintomas-editar-{{ $p->id }}" value="{{ $p->cadastro_sintomas_editar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Editar</label>
                                    @if($p->cadastro_sintomas_cadastrar === "true")
                                    <input type="checkbox" checked name="cadastro-sintomas-{{ $p->id }}" id="cadastro-sintomas-cadastrar-{{ $p->id }}" value="{{ $p->cadastro_sintomas_cadastrar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-sintomas-{{ $p->id }}" id="cadastro-sintomas-cadastrar-{{ $p->id }}" value="{{ $p->cadastro_sintomas_cadastrar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Cadastrar</label>
                                    @if($p->cadastro_sintomas_excluir === "true")
                                    <input type="checkbox" checked name="cadastro-sintomas-{{ $p->id }}" id="cadastro-sintomas-excluir-{{ $p->id }}" value="{{ $p->cadastro_sintomas_excluir }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-sintomas-{{ $p->id }}" id="cadastro-sintomas-excluir-{{ $p->id }}" value="{{ $p->cadastro_sintomas_excluir }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Excluir</label>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="hidden" id="cadastro-diagnosticos-{{ $p->id }}" value="true" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Cadastro de Diagnósticos</label>
                                </div>
                                <div class="flex">
                                    @if($p->cadastro_diagnosticos_ler === "true")
                                    <input type="checkbox" checked name="cadastro-diagnosticos-{{ $p->id }}" id="cadastro-diagnosticos-ler-{{ $p->id }}" value="{{ $p->cadastro_diagnosticos_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-diagnosticos-{{ $p->id }}" id="cadastro-diagnosticos-ler-{{ $p->id }}" value="{{ $p->cadastro_diagnosticos_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Ler</label>
                                    @if($p->cadastro_diagnosticos_editar === "true")
                                    <input type="checkbox" checked name="cadastro-diagnosticos-{{ $p->id }}" id="cadastro-diagnosticos-editar-{{ $p->id }}" value="{{ $p->cadastro_diagnosticos_editar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-diagnosticos-{{ $p->id }}" id="cadastro-diagnosticos-editar-{{ $p->id }}" value="{{ $p->cadastro_diagnosticos_editar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Editar</label>
                                    @if($p->cadastro_diagnosticos_cadastrar === "true")
                                    <input type="checkbox" checked name="cadastro-diagnosticos-{{ $p->id }}" id="cadastro-diagnosticos-cadastrar-{{ $p->id }}" value="{{ $p->cadastro_diagnosticos_cadastrar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-diagnosticos-{{ $p->id }}" id="cadastro-diagnosticos-cadastrar-{{ $p->id }}" value="{{ $p->cadastro_diagnosticos_cadastrar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Cadastrar</label>
                                    @if($p->cadastro_diagnosticos_excluir === "true")
                                    <input type="checkbox" checked name="cadastro-diagnosticos-{{ $p->id }}" id="cadastro-diagnosticos-excluir-{{ $p->id }}" value="{{ $p->cadastro_diagnosticos_excluir}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="cadastro-diagnosticos-{{ $p->id }}" id="cadastro-diagnosticos-excluir-{{ $p->id }}" value="{{ $p->cadastro_diagnosticos_excluir}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Excluir</label>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="hidden" id="validacao-documentos-{{ $p->id }}" value="true" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Validação de Documentos</label>
                                </div>
                                <div class="flex">
                                    @if($p->validacao_documentos_ler === "true")
                                    <input type="checkbox" checked name="validacao-documentos-{{ $p->id }}" id="validacao-documentos-ler-{{ $p->id }}" value="{{ $p->validacao_documentos_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="validacao-documentos-{{ $p->id }}" id="validacao-documentos-ler-{{ $p->id }}" value="{{ $p->validacao_documentos_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Ler</label>
                                    @if($p->validacao_documentos_editar === "true")
                                    <input type="checkbox" checked name="validacao-documentos-{{ $p->id }}" id="validacao-documentos-editar-{{ $p->id }}" value="{{ $p->validacao_documentos_editar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="validacao-documentos-{{ $p->id }}" id="validacao-documentos-editar-{{ $p->id }}" value="{{ $p->validacao_documentos_editar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Editar</label>
                                    @if($p->validacao_documentos_cadastrar === "true")
                                    <input type="checkbox" checked name="validacao-documentos-{{ $p->id }}" id="validacao-documentos-cadastrar-{{ $p->id }}" value="{{ $p->validacao_documentos_cadastrar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="validacao-documentos-{{ $p->id }}" id="validacao-documentos-cadastrar-{{ $p->id }}" value="{{ $p->validacao_documentos_cadastrar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Cadastrar</label>
                                    @if($p->validacao_documentos_excluir === "true")
                                    <input type="checkbox" checked name="validacao-documentos-{{ $p->id }}" id="validacao-documentos-excluir-{{ $p->id }}" value="{{ $p->validacao_documentos_excluir}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="validacao-documentos-{{ $p->id }}" id="validacao-documentos-excluir-{{ $p->id }}" value="{{ $p->validacao_documentos_excluir}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Excluir</label>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="hidden" id="farmacias-parceiras-{{ $p->id }}" value="true" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Farmácias Parceiras</label>
                                </div>
                                <div class="flex">
                                    @if($p->farmacias_parceiras_ler === "true")
                                    <input type="checkbox" checked name="farmacias-parceiras-{{ $p->id }}" id="farmacias-parceiras-ler-{{ $p->id }}" value="{{ $p->farmacias_parceiras_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="farmacias-parceiras-{{ $p->id }}" id="farmacias-parceiras-ler-{{ $p->id }}" value="{{ $p->farmacias_parceiras_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Ler</label>
                                    @if($p->farmacias_parceiras_editar === "true")
                                    <input type="checkbox" checked name="farmacias-parceiras-{{ $p->id }}" id="farmacias-parceiras-editar-{{ $p->id }}" value="{{ $p->farmacias_parceiras_editar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="farmacias-parceiras-{{ $p->id }}" id="farmacias-parceiras-editar-{{ $p->id }}" value="{{ $p->farmacias_parceiras_editar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Editar</label>
                                    @if($p->farmacias_parceiras_cadastrar === "true")
                                    <input type="checkbox" checked name="farmacias-parceiras-{{ $p->id }}" id="farmacias-parceiras-cadastrar-{{ $p->id }}" value="{{ $p->farmacias_parceiras_cadastrar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="farmacias-parceiras-{{ $p->id }}" id="farmacias-parceiras-cadastrar-{{ $p->id }}" value="{{ $p->farmacias_parceiras_cadastrar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Cadastrar</label>
                                    @if($p->farmacias_parceiras_excluir === "true")
                                    <input type="checkbox" checked name="farmacias-parceiras-{{ $p->id }}" id="farmacias-parceiras-excluir-{{ $p->id }}" value="{{ $p->farmacias_parceiras_excluir}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="farmacias-parceiras-{{ $p->id }}" id="farmacias-parceiras-excluir-{{ $p->id }}" value="{{ $p->farmacias_parceiras_excluir}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Excluir</label>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="hidden" id="listar-usuarios-{{ $p->id }}" value="true" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Listar Usuários c/ Permissões</label>
                                </div>
                                <div class="flex">
                                    @if($p->listar_usuarios_ler === "true")
                                    <input type="checkbox" checked name="listar-usuarios-{{ $p->id }}" id="listar-usuarios-ler-{{ $p->id }}" value="{{ $p->listar_usuarios_ler }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="listar-usuarios-{{ $p->id }}" id="listar-usuarios-ler-{{ $p->id }}" value="{{ $p->listar_usuarios_ler }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Ler</label>
                                    @if($p->listar_usuarios_editar === "true")
                                    <input type="checkbox" checked name="listar-usuarios-{{ $p->id }}" id="listar-usuarios-editar-{{ $p->id }}" value="{{ $p->listar_usuarios_editar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="listar-usuarios-{{ $p->id }}" id="listar-usuarios-editar-{{ $p->id }}" value="{{ $p->listar_usuarios_editar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Editar</label>
                                    @if($p->listar_usuarios_cadastrar === "true")
                                    <input type="checkbox" checked name="listar-usuarios-{{ $p->id }}" id="listar-usuarios-cadastrar-{{ $p->id }}" value="{{ $p->listar_usuarios_cadastrar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="listar-usuarios-{{ $p->id }}" id="listar-usuarios-cadastrar-{{ $p->id }}" value="{{ $p->listar_usuarios_cadastrar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Cadastrar</label>
                                    @if($p->listar_usuarios_excluir === "true")
                                    <input type="checkbox" checked name="listar-usuarios-{{ $p->id }}" id="listar-usuarios-excluir-{{ $p->id }}" value="{{ $p->listar_usuarios_excluir }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="listar-usuarios-{{ $p->id }}" id="listar-usuarios-excluir-{{ $p->id }}" value="{{ $p->listar_usuarios_excluir }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Excluir</label>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="hidden" id="permissoes-{{ $p->id }}" value="true" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Permissões</label>
                                </div>
                                <div class="flex">
                                    @if($p->permissoes_ler === "true")
                                    <input type="checkbox" checked name="permissoes-{{ $p->id }}" id="permissoes-ler-{{ $p->id }}" value="{{ $p->permissoes_ler }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="permissoes-{{ $p->id }}" id="permissoes-ler-{{ $p->id }}" value="{{ $p->permissoes_ler }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Ler</label>
                                    @if($p->permissoes_editar === "true")
                                    <input type="checkbox" checked name="permissoes-{{ $p->id }}" id="permissoes-editar-{{ $p->id }}" value="{{ $p->permissoes_editar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="permissoes-{{ $p->id }}" id="permissoes-editar-{{ $p->id }}" value="{{ $p->permissoes_editar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Editar</label>
                                    @if($p->permissoes_cadastrar === "true")
                                    <input type="checkbox" checked name="permissoes-{{ $p->id }}" id="permissoes-cadastrar-{{ $p->id }}" value="{{ $p->permissoes_cadastrar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="permissoes-{{ $p->id }}" id="permissoes-cadastrar-{{ $p->id }}" value="{{ $p->permissoes_cadastrar }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Cadastrar</label>
                                    @if($p->permissoes_excluir === "true")
                                    <input type="checkbox" checked name="permissoes-{{ $p->id }}" id="permissoes-excluir-{{ $p->id }}" value="{{ $p->permissoes_excluir }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="permissoes-{{ $p->id }}" id="permissoes-excluir-{{ $p->id }}" value="{{ $p->permissoes_excluir }}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Excluir</label>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="hidden" id="descontos-promocoes-{{ $p->id }}" value="true" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Descontos e Promoções</label>
                                </div>
                                <div class="flex">
                                    @if($p->descontos_promocoes_ler === "true")
                                    <input type="checkbox" checked name="descontos-promocoes-{{ $p->id }}" id="descontos-promocoes-ler-{{ $p->id }}" value="{{ $p->descontos_promocoes_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="descontos-promocoes-{{ $p->id }}" id="descontos-promocoes-ler-{{ $p->id }}" value="{{ $p->descontos_promocoes_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Ler</label>
                                    @if($p->descontos_promocoes_editar === "true")
                                    <input type="checkbox" checked name="descontos-promocoes-{{ $p->id }}" id="descontos-promocoes-editar-{{ $p->id }}" value="{{ $p->descontos_promocoes_editar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="descontos-promocoes-{{ $p->id }}" id="descontos-promocoes-editar-{{ $p->id }}" value="{{ $p->descontos_promocoes_editar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Editar</label>
                                    @if($p->descontos_promocoes_cadastrar === "true")
                                    <input type="checkbox" checked name="descontos-promocoes-{{ $p->id }}" id="descontos-promocoes-cadastrar-{{ $p->id }}" value="{{ $p->descontos_promocoes_cadastrar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="descontos-promocoes-{{ $p->id }}" id="descontos-promocoes-cadastrar-{{ $p->id }}" value="{{ $p->descontos_promocoes_cadastrar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Cadastrar</label>
                                    @if($p->descontos_promocoes_excluir === "true")
                                    <input type="checkbox" checked name="descontos-promocoes-{{ $p->id }}" id="descontos-promocoes-excluir-{{ $p->id }}" value="{{ $p->descontos_promocoes_excluir}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="descontos-promocoes-{{ $p->id }}" id="descontos-promocoes-excluir-{{ $p->id }}" value="{{ $p->descontos_promocoes_excluir}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Excluir</label>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="hidden" id="extracao-dados-{{ $p->id }}" value="true" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Extração de Dados</label>
                                </div>
                                <div class="flex">
                                    @if($p->extracao_dados_ler === "true")
                                    <input type="checkbox" checked name="extracao-dados-{{ $p->id }}" id="extracao-dados-ler-{{ $p->id }}" value="{{ $p->extracao_dados_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="extracao-dados-{{ $p->id }}" id="extracao-dados-ler-{{ $p->id }}" value="{{ $p->extracao_dados_ler}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Ler</label>
                                    @if($p->extracao_dados_editar === "true")
                                    <input type="checkbox" checked name="extracao-dados-{{ $p->id }}" id="extracao-dados-editar-{{ $p->id }}" value="{{ $p->extracao_dados_editar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="extracao-dados-{{ $p->id }}" id="extracao-dados-editar-{{ $p->id }}" value="{{ $p->extracao_dados_editar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Editar</label>
                                    @if($p->extracao_dados_cadastrar === "true")
                                    <input type="checkbox" checked name="extracao-dados-{{ $p->id }}" id="extracao-dados-cadastrar-{{ $p->id }}" value="{{ $p->extracao_dados_cadastrar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="extracao-dados-{{ $p->id }}" id="extracao-dados-cadastrar-{{ $p->id }}" value="{{ $p->extracao_dados_cadastrar}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Cadastrar</label>
                                    @if($p->extracao_dados_excluir === "true")
                                    <input type="checkbox" checked name="extracao-dados-{{ $p->id }}" id="extracao-dados-excluir-{{ $p->id }}" value="{{ $p->extracao_dados_excluir}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @else
                                    <input type="checkbox" name="extracao-dados-{{ $p->id }}" id="extracao-dados-excluir-{{ $p->id }}" value="{{ $p->extracao_dados_excluir}}" class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5" placeholder="">
                                    @endif
                                    <label class="mr-4 block mb-2 text-sm font-medium text-gray-900">Excluir</label>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button onClick="salvarPermissoes({{ $p->id }})" data-modal-hide="edit-modal-{{ $p->id }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <div data-modal-backdrop="static" id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Permissões
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="add-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">ID</label>
                                <input id="nome-novo-diagnostico" type="text" name="brand" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Exemplo: Epilepsia">
                            </div>
                            <div id="div-selectshidden">
                                <label class="block mb-2 text-sm font-medium text-gray-900">Nivel</label>
                                <select id="select-sintomas" class="select-sintomas mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                </select>
                                <h3 class="mb-4 font-semibold text-gray-900">Permissões</h3>
                                <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg">
                                    <li class="w-full border-b border-gray-200 rounded-t-lg">
                                        <div class="flex items-center pl-3">
                                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                            <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900">Nenhuma</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 rounded-t-lg">
                                        <div class="flex items-center pl-3">
                                            <input id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                            <label for="react-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900">Ler</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 rounded-t-lg">
                                        <div class="flex items-center pl-3">
                                            <input id="angular-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                            <label for="angular-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900">Escrever</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 rounded-t-lg">
                                        <div class="flex items-center pl-3">
                                            <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                            <label for="laravel-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900">Excluir</label>
                                        </div>
                                    </li>
                                    </li>
                                    <li class="w-full border-b border-gray-200 rounded-t-lg">
                                        <div class="flex items-center pl-3">
                                            <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                            <label for="laravel-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900">Setup</label>
                                        </div>
                                    </li>
                                    </li>
                                    <li class="w-full border-b border-gray-200 rounded-t-lg">
                                        <div class="flex items-center pl-3">
                                            <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                            <label for="laravel-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900">Define Permissões</label>
                                        </div>
                                    </li>
                                </ul>


                            </div>
                            <!-- Modal footer -->
                            <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                                <button onclick="cadastreDiagnostico()" data-modal-hide="edit-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>

                </html>