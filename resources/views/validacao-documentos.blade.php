@include('components.header')

<body>
    <div class="flex">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 ml-[20%] p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/doc-icon.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                        <p>Validação de Documentos</p>
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
                                <p class="flex text-white">ID</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Prescritores</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Documentos Pendentes</p>
                            </th>
                            <th class="rounded-tr-xl px-4">
                                <p class="flex justify-center text-white">Validar</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        @foreach ($prescribers as $p)
                        <tr>
                            <td class="px-4">{{ $p->id }}</td>
                            <td class="px-4">{{ $p->name }}</td>
                            <td class="px-4">{{ $p->docs_pendentes }}</td>
                            <td data-modal-target="editModal-{{ $p->id }}" data-modal-toggle="editModal-{{ $p->id }}" id="editar" class="px-4 underline decoration-blue-400 decoration-2">
                                <p class="flex justify-center">Validar</p>
                            </td>
                        <tr>
                            @endforeach
                        <tr class="bg-gray-800 h-10">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4 rounded-br-xl"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</div>
<!-- Modal footer -->
<div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">

</div>
</div>
</div>
</div>

@foreach ($prescribers as $p)
<div id="editModal-{{ $p->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Validar Documentos
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="editModal-{{ $p->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Fechar</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div>
                    <label for="doc-type-{{ $p->id }}" class="block mb-2 text-sm font-medium text-gray-900">Documentos</label>
                    <select id="doc-type-{{ $p->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        @if ($p->ok_crm_frente === "false")
                        <option selected value="crm-frente">CRM Frente</option>
                        @endif
                        @if ($p->ok_crm_verso === "false")
                        <option value="crm-verso">CRM Verso</option>
                        @endif
                        @if ($p->ok_crm_verso === "false")
                        <option value="selfie-com-doc">Selfie com Documento</option>
                        @endif
                        @if ($p->ok_selfie_com_doc === "false")
                        <option value="foto-perfil">Foto Perfil</option>
                        @endif
                    </select>
                </div>
                <div class="flex items-center mb-4">
                    <input id="invalido-{{ $p->id }}" type="radio" name="validade-{{ $p->id }}" value="false" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                    <label class="ml-2 text-sm font-medium text-gray-900">Invalidar</label>
                </div>
                <div class="flex items-center">
                    <input id="valido-{{ $p->id }}" type="radio" name="validade-{{ $p->id }}" value="true" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                    <label class="ml-2 text-sm font-medium text-gray-900">Validar</label>
                </div>
                <div class="mb-6">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900">Motivo</label>
                    <input type="text" id="motivo-{{ $p->id }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>
            <!-- Modal footer -->
            <div class="box items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button onClick="baixarDoc({{ $p->id }})" type="button" class="text-white bg-stone-700 hover:bg-stone-800 focus:ring-4 focus:outline-none focus:ring-stone-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Baixar</button>
                <button onClick="validarOuInvalidarDoc({{ $p->id }})" data-modal-hide="editModal-{{ $p->id }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Salvar</button>
            </div>
        </div>
    </div>
</div>
@endforeach

</html>