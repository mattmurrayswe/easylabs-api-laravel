@include('components.header')

<body>
    <div class="flex">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 ml-[20%] p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="{{ route('login') }}">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/med-icon.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                        <p>Cadastro de Medicamentos</p>
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
            <div class="h-10 my-5 flex items-center w-full">
                <div id="alert-3" style="display:none" class="flex items-center w-full p-4 text-green-50 rounded-lg bg-green-800 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                      Alterações realizadas com sucesso.
                    </div>
                    <button type="button" onClick="closeAlert()" class="ml-auto -mx-1.5 -my-1.5 bg-green-800 text-green-50 rounded-lg focus:ring-2 p-1.5 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" aria-label="Close">
                      <span class="sr-only">Close</span>
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                    </button>
                </div>
            </div>
            <div id="tabela-medicamentos" class="h-5/6 mb-20">
                <div class="mb-2">
                    <form action="{{ url('/cadastro-medicamentos') }}" method="GET">
                        <div class="flex">
                            <div class="flex-1 mr-1">
                                <input id="search" type="text" name="search" value="{{ $search }}" placeholder="Filtro" class="px-3 py-2 border rounded-lg w-full focus:outline-none">
                            </div>
                            <div>
                                <button type="submit" class="bg-blue-700 hover:bg-blue-800 focus:ring-1 focus:outline-none focus:ring-blue-300 text-white px-4 py-2 rounded-lg">Filtrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table-auto w-full h-full text-xs rounded-xl">
                    <thead class="h-16">
                        <tr class="bg-gray-800">
                            <th class="rounded-tl-xl px-4">
                                <p class="flex text-white">ID</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Nome Medicamento</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Apresentação</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Concentração</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Volume Frasco</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Formulação</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Laboratório</p>
                            </th>
                            <th class="px-4">
                                <p class="flex justify-end text-white">Editar</p>
                            </th>
                            <th class="rounded-tr-xl px-4">
                                <p class="flex justify-center text-white">Excluir</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        @php($i = 0)
                        @foreach ($medicamentos as $medicamento)
                        @if ($i % 2 == 0)
                        <tr class="h-10 bg-gray-50">
                            @else
                        <tr class="h-10">
                            @endif
                            <td id="id-{{ $medicamento->id }}" class="px-4">{{ $medicamento->id }}</td>
                            <td id="name-{{ $medicamento->id }}" class="px-4">{{ $medicamento->name }}</td>
                            <td id="presentation-{{ $medicamento->id }}" class="px-4">{{ $medicamento->presentation }}</td>
                            <td id="concentration-{{ $medicamento->id }}" class="px-4">{{ $medicamento->concentration }}</td>
                            <td id="volume_flask-{{ $medicamento->id }}" class="px-4">{{ $medicamento->volume_flask }}</td>
                            <td id="formulation-{{ $medicamento->id }}" class="px-4">{{ $medicamento->formulation }}</td>
                            <td id="lab-{{ $medicamento->id }}" class="px-4">{{ $medicamento->lab }}</td>
                            <td data-modal-target="edit-modal-{{ $medicamento->id }}" data-modal-toggle="edit-modal-{{ $medicamento->id }}" class="px-4 underline decoration-blue-400 decoration-2 hover:text-blue-600 focus:text-red">
                                <p class="flex justify-end">Editar</p>
                            </td>
                            <td data-modal-target="delete-modal-{{ $medicamento->id }}" data-modal-toggle="delete-modal-{{ $medicamento->id }}" class="px-4 underline decoration-pink-400 decoration-2 w-1/12 hover:text-red-600 focus:text-red">
                                <p class="flex justify-center">Excluir</p>
                            </td>
                        </tr>
                        @php($i++)
                        @endforeach
                        <tr class="bg-gray-800 max-h-5 h-5">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4" colspan="4"> <!-- Use colspan to span across two columns -->
                                <div class="flex justify-center items-center h-full">
                                    {{ $medicamentos->links() }}
                                </div>
                            </td>
                            <td class="pl-4 pr-1 text-end">
                                <button data-modal-target="add-modal" data-modal-toggle="add-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 my-2.5 text-center">Novo</button>
                            </td>
                            <td>
                                <button type="button" onClick="exportMeds()" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-600 font-medium rounded-lg text-sm px-5 py-2.5 my-2.5 text-center">Exportar</button>
                            </td>
                            <td class="text-right">
                                <label class="px-5 py-2.5 mr-2.5 w-fit rounded-lg bg-gray-500 w-fill cursor-pointer">
                                    Escolher Arquivo
                                    <input id="fileInput" type="file" name="file" accept=".xlsx, .csv" style="display: none;">
                                </label>
                            </td>
                            <td class="rounded-br-xl text-start">
                                @csrf
                                <button  onClick="importData()" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2.5 text-center" type="submit">Importar</button>
                            </td>
                        </tr>
                        <tr class="h-0">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4 rounded-br-xl"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div data-modal-backdrop="static" id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Adicionar Novo Medicamento
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
                                <label for="input-add-name" class="block mb-2 text-sm font-medium text-gray-900">Nome Medicamento</label>
                                <input type="text" id="input-add-name" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="input-add-presentation" class="block mb-2 text-sm font-medium text-gray-900">Apresentação</label>
                                <select id="input-add-presentation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    <option selected="ml">ml</option>
                                    <option value="gotas">gotas</option>
                                    <option value="comprimidos">comprimidos</option>
                                    <option value="mg">mg</option>
                                    <option value="g">g</option>
                                </select>
                            </div>
                            <div>
                                <label for="input-add-concentration" class="block mb-2 text-sm font-medium text-gray-900">Concentração</label>
                                <input type="text" id="input-add-concentration" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="input-add-volume_flask" class="block mb-2 text-sm font-medium text-gray-900">Volume Frasco</label>
                                <input type="text" id="input-add-volume_flask" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="input-add-formulation" class="block mb-2 text-sm font-medium text-gray-900">Formulação</label>
                                <input type="text" id="input-add-formulation" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="input-add-lab" class="block mb-2 text-sm font-medium text-gray-900">Laboratório</label>
                                <input type="text" id="input-add-lab" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button onclick="cadastreMedicamento()" data-modal-hide="add-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Adicionar</button>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($medicamentos as $medicamento)
            <div data-modal-backdrop="static" id="edit-modal-{{ $medicamento->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Editar Medicamento
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="edit-modal-{{ $medicamento->id }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->

                        <div class="p-6 space-y-6">
                            <div>
                                <label for="input-name-{{ $medicamento->id }}" class="block mb-2 text-sm font-medium text-gray-900">Nome Medicamento</label>
                                <input type="text" id="input-name-{{ $medicamento->id }}" value="{{ $medicamento->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="input-presentation-{{ $medicamento->id }}" class="block mb-2 text-sm font-medium text-gray-900">Apresentação</label>
                                <input type="text" id="input-presentation-{{ $medicamento->id }}" value="{{ $medicamento->presentation }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="input-concentration-{{ $medicamento->id }}" class="block mb-2 text-sm font-medium text-gray-900">Concentração</label>
                                <input type="text" id="input-concentration-{{ $medicamento->id }}" value="{{ $medicamento->concentration }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="input-volume_flask-{{ $medicamento->id }}" class="block mb-2 text-sm font-medium text-gray-900">Volume Frasco</label>
                                <input type="text" id="input-volume_flask-{{ $medicamento->id }}" value="{{ $medicamento->volume_flask }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="input-formulation-{{ $medicamento->id }}" class="block mb-2 text-sm font-medium text-gray-900">Formulação</label>
                                <input type="text" id="input-formulation-{{ $medicamento->id }}" value="{{ $medicamento->formulation }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="input-lab-{{ $medicamento->id }}" class="block mb-2 text-sm font-medium text-gray-900">Laboratório</label>
                                <input type="text" id="input-lab-{{ $medicamento->id }}" value="{{ $medicamento->lab }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button onclick="editMedicamento({{ $medicamento->id }})" data-modal-hide="edit-modal-{{ $medicamento->id }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($medicamentos as $medicamento)
            <div data-modal-backdrop="static" id="delete-modal-{{ $medicamento->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Excluir Medicamento
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="delete-modal-{{ $medicamento->id }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500">
                                Deseja realmente excluir o medicamento "{{ $medicamento->name }}"?
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button onclick="deleteMedicamento({{ $medicamento->id }})" data-modal-hide="delete-modal-{{ $medicamento->id }}" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>