@include('components.header')

<body>
    <div class="flex">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 ml-[20%] p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/diag-icon.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                        <p>Cadastro de Diagnósticos</p>
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
                    <form action="{{ url('/cadastro-diagnosticos') }}" method="GET">
                        <div class="flex">
                            <div class="flex-1 mr-1">
                                <input type="text" name="search" value="{{ $search }}" placeholder="Filtro" class="px-3 py-2 border rounded-lg w-full focus:outline-none">
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
                                <p class="flex text-white">Diagnóstico</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Sintomas</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Medicamento Sugerido</p>
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
                        @foreach ($diagnosesPresenter as $diagnose)
                        @if ($i % 2 == 0)
                        <tr class="h-10 bg-gray-50">
                            @else
                        <tr class="h-10">
                            @endif
                            <td class="px-4">{{ $diagnose['id'] }}</td>
                            <td class="px-4">{{ $diagnose['name'] }}</td>
                            <td class="px-4">{{ $diagnose['symptoms_concat'] }}</td>
                            <td class="px-4">{{ $diagnose['medicines_concat'] }}</td>
                            <td data-modal-target="edit-modal-{{ $diagnose['id'] }}" data-modal-toggle="edit-modal-{{ $diagnose['id'] }}" class="px-4 underline decoration-blue-400 decoration-2">
                                <p class="flex justify-end">Editar</p>
                            </td>
                            <td data-modal-target="delete-modal-{{ $diagnose['id'] }}" data-modal-toggle="delete-modal-{{ $diagnose['id'] }}" class="px-4 underline decoration-pink-400 decoration-2 w-1/12">
                                <p class="flex justify-center">Excluir</p>
                            </td>
                        </tr>
                        @php($i++)
                        @endforeach
                        <tr class="bg-gray-800 max-h-5 h-5">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4" colspan="4"> <!-- Use colspan to span across two columns -->
                                <div class="flex justify-center items-center h-full">
                                    {{ $diagnoses->links() }}
                                </div>
                            </td>
                            <td class="px-4 rounded-br-xl">
                                <button data-modal-target="add-modal" data-modal-toggle="add-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 my-2.5 text-center">Novo</button>
                            </td>
                        </tr>
                        <tr class="h-0">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4 rounded-br-xl"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modais de Edição do Diagnóstico -->
            @foreach ($diagnosesPresenter as $diagnose)
            <div data-modal-backdrop="static" id="edit-modal-{{ $diagnose['id'] }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Editar Diagnóstico
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="edit-modal-{{ $diagnose['id'] }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Diagnóstico</label>
                                <input type="text" name="brand" id="diagnose-name-{{ $diagnose['id'] }}" value="{{ $diagnose['name'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Exemplo: Epilepsia">
                            </div>
                            <div id="div-selects-sintomas-{{ $diagnose['id'] }}">
                                <label class="block mb-2 text-sm font-medium text-gray-900">Sintomas</label>
                                @if (!empty($diagnose['has_symptoms']) && is_array($diagnose['has_symptoms']))
                                @foreach ($diagnose['has_symptoms'] as $symptom)
                                <div class="select-sintomas-{{ $diagnose['id'] }}-{{ $symptom['symptom_id'] }} flex items-center mb-1">
                                    <button class="p-2 mr-[2px] bg-red-500 text-white rounded-lg w-10 h-10 flex-shrink-0" onclick="deleteSelectPlusButton(this)">-</button>
                                    <select class="select-sintomas-{{ $diagnose['id'] }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                        @foreach ($symptoms as $s)
                                        <option value="{{ $s->id }}" {{ $s->id == $symptom['symptom_id'] ? 'selected' : '' }}>
                                            {{ $s->id }} - {{ $s->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach
                                @else
                                <p>No symptoms found for this diagnosis.</p>
                                @endif
                                <div id="select-sintomas-{{ $diagnose['id'] }}" class="select-sintomas-{{ $diagnose['id'] }}-{{ $symptom['symptom_id'] }} hidden flex items-center mb-1">
                                    <button class="p-2 mr-[2px] bg-red-500 text-white rounded-lg w-10 h-10 flex-shrink-0" onclick="deleteSelectPlusButton(this)">-</button>
                                    <select id="hidden-select-sintomas-{{ $diagnose['id'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                        @foreach ($symptoms as $s)
                                        <option value="{{ $s->id }}" {{ $s->id == $symptom['symptom_id'] ? 'selected' : '' }}>
                                            {{ $s->id }} - {{ $s->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button onClick="addInputSintomaAoDiagnostico({{ $diagnose['id'] }})" id="button-select-sintomas-{{ $diagnose['id'] }}" class="mt-1 mb-1 block w-full p-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-1 text-center"> + </button>
                            </div>
                            <div id="div-selects-medicines-{{ $diagnose['id'] }}">
                                <label class="block mb-2 text-sm font-medium text-gray-900">Medicamentos Sugeridos</label>
                                @if (!empty($diagnose['has_suggested_medicines']) && is_array($diagnose['has_suggested_medicines']))
                                @foreach ($diagnose['has_suggested_medicines'] as $medicine)
                                <div class="select-medicamentos-{{ $diagnose['id'] }}-{{ $medicine['medicine_id'] }} mb-1 flex items-center ">
                                    <button class="p-2 mr-[2px] bg-red-500 text-white rounded-lg w-10 h-10 flex-shrink-0" onclick="deleteSelectPlusButton(this)">-</button>
                                    <select class="select-medicamentos-{{ $diagnose['id'] }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                        @foreach ($medicines as $m)
                                        <option value="{{ $m->id }}" {{ $m->id == $medicine['medicine_id'] ? 'selected' : '' }}>
                                            {{ $m->id }} - {{ $m->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach
                                @else
                                <p>No medicines found for this diagnosis.</p>
                                @endif
                                <div id="select-medicamentos-{{ $diagnose['id'] }}" class="select-medicamentos-{{ $diagnose['id'] }}-{{ $medicine['medicine_id'] }} mb-1 hidden flex items-center ">
                                    <button class="p-2 mr-[2px] bg-red-500 text-white rounded-lg w-10 h-10 flex-shrink-0" onclick="deleteSelectPlusButton(this)">-</button>
                                    <select id="hidden-select-medicamentos-{{ $diagnose['id'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                        @foreach ($medicines as $m)
                                        <option value="{{ $m->id }}" {{ $m->id == $medicine['medicine_id'] ? 'selected' : '' }}>
                                            {{ $m->id }} - {{ $m->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button onCLick="addInputMedicamentoAoDiagnostico({{ $diagnose['id'] }})" id="button-select-medicamentos-{{ $diagnose['id'] }}" class="mb-1 block w-full p-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-1 text-center"> + </button>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button onclick="editDiagnostico({{ $diagnose['id'] }})" data-modal-hide="edit-modal-{{ $diagnose['id'] }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <div data-modal-backdrop="static" id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Novo Diagnóstico
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
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Diagnóstico</label>
                                <input id="nome-novo-diagnostico" type="text" name="brand" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Exemplo: Epilepsia">
                            </div>
                            <div id="div-selects-sintomas">
                                <label class="block mb-2 text-sm font-medium text-gray-900">Sintomas</label>
                                <div id="select-sintomas" class="select-sintomas hidden flex items-center mb-1">
                                    <button class="p-2 mr-[2px] bg-red-500 text-white rounded-lg w-10 h-10 flex-shrink-0" onclick="deleteSelectPlusButton(this)">-</button>
                                    <select id="hidden-select-sintomas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                        @foreach ($symptoms as $s)
                                        <option value="{{ $s->id }}" {{ $s->id == $symptom['symptom_id'] ? 'selected' : '' }}>
                                            {{ $s->id }} - {{ $s->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button onClick="addInputSintomaAoDiagnostico(false)" id="button-select-sintomas" class="mt-1 mb-1 block w-full p-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-1 text-center"> + </button>
                            </div>
                            <div id="div-selects-medicines">
                                <label class="block mb-2 text-sm font-medium text-gray-900">Medicamentos Sugeridos</label>
                                <div id="select-medicamentos" class="select-medicamentos mb-1 hidden flex items-center ">
                                    <button class="p-2 mr-[2px] bg-red-500 text-white rounded-lg w-10 h-10 flex-shrink-0" onclick="deleteSelectPlusButton(this)">-</button>
                                    <select id="hidden-select-medicamentos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                        @foreach ($medicines as $m)
                                        <option value="{{ $m->id }}" {{ $m->id == $medicine['medicine_id'] ? 'selected' : '' }}>
                                            {{ $m->id }} - {{ $m->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button onCLick="addInputMedicamentoAoDiagnostico(false)" id="button-select-medicamentos" class="mb-1 block w-full p-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-1 text-center"> + </button>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button onclick="cadastreDiagnostico()" data-modal-hide="edit-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($diagnoses as $diagnose)
            <div data-modal-backdrop="static" id="delete-modal-{{ $diagnose['id'] }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Excluir Diagnóstico
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="delete-modal-{{ $diagnose['id'] }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500">
                                Deseja realmente excluir o diagnóstico "{{ $diagnose['name'] }}"?
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button onclick="deleteDiagnostico({{ $diagnose['id'] }})" data-modal-hide="delete-modal-{{ $diagnose['id'] }}" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>