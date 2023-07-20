@include('components.header')

<body>
    <div class="container flex min-h-screen min-w-full h-screen">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 p-20 h-screen">
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
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/prof-icon.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                    </a>
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
                                <p class="flex text-white">Diagnóstico</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Sintomas</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Medicamento Sugeridos</p>
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
                    @foreach ($diagnoses as $diagnose)
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

                        <tr class="bg-gray-800 h-10">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4 rounded-br-xl">
                                <button data-modal-target="add-modal" data-modal-toggle="add-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 my-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Novo</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modais de Edição do Diagnóstico -->
            @foreach ($diagnoses as $diagnose)
            <div id="edit-modal-{{ $diagnose['id'] }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Editar Diagnóstico
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal-{{ $diagnose['id'] }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnóstico</label>
                                <input type="text" name="brand" id="diagnose-name" value="{{ $diagnose['name'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Exemplo: Epilepsia">
                            </div>
                            <div id="div-selects-sintomas-{{ $diagnose['id'] }}">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sintomas</label>
                                @php($j = 0)
                                @if (isset($diagnose["has_symptoms"]))
                                    @foreach ($diagnose["has_symptoms"] as $symptom)
                                        @if (isset($symptom['symptom']['name']))
                                        @php($j++)
                                            <select id="select-sintomas-{{ $diagnose['id'] }}" class="select-sintomas-{{ $diagnose['id'] }} mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                @foreach ($symptoms as $s)
                                                    @if ($symptom['symptom']['id'] === $s->id)
                                                        <option selected value="{{ $s->id }}">{{ $s->id }} - {{ $s->name }}</option>
                                                    @else 
                                                        <option value="{{ $s->id }}">{{ $s->id }} - {{ $s->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        @endif
                                    @endforeach
                                @endif
                                @if ($j == 0)
                                <select id="select-sintomas-{{ $diagnose['id'] }}" class="select-sintomas-{{ $diagnose['id'] }} mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    @foreach ($symptoms as $s)
                                    <option value="{{ $s->id }}">{{ $s->id }} - {{ $s->name }}</option>
                                    @endforeach
                                </select>
                                @endif
                                <button onClick="addInputSintomaAoDiagnostico({{ $diagnose['id'] }})" id="button-select-sintomas-{{ $diagnose['id'] }}" class="mt-1 mb-1 block w-full p-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> + </button>
                            </div>
                            <div id="div-selects-medicamentos-{{ $diagnose['id'] }}">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medicamentos Sugeridos</label>
                                @php($j = 0)
                                @if (isset($diagnose["has_suggested_medicines"]))
                                    @foreach ($diagnose["has_suggested_medicines"] as $medicine)
                                        @if (isset($medicine['medicine']['name']))
                                        @php($j++)
                                            <select id="select-medicamentos-{{ $diagnose['id'] }}" class="select-medicamentos-{{ $diagnose['id'] }} mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                @foreach ($medicines as $m)
                                                    @if ($medicine['medicine']['id'] === $m->id)
                                                        <option selected value="{{ $m->id }}">{{ $m->id }} - {{ $m->name }}</option>
                                                    @else 
                                                        <option value="{{ $m->id }}">{{ $m->id }} - {{ $m->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        @endif
                                    @endforeach
                                @endif
                                @if ($j == 0)
                                <select id="select-medicamentos-{{ $diagnose['id'] }}" class="select-medicamentos-{{ $diagnose['id'] }} mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    @foreach ($medicines as $m)
                                        <option value="{{ $m->id }}">{{ $m->id }} - {{ $m->name }}</option>
                                    @endforeach
                                </select>
                                @endif
                                <button onCLick="addInputMedicamentoAoDiagnostico({{ $diagnose['id'] }})" id="button-select-medicamentos-{{ $diagnose['id'] }}" class="mb-1 block w-full p-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> + </button>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button onclick="editDiagnostico({{ $diagnose['id'] }})" data-modal-hide="edit-modal-{{ $diagnose['id'] }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <div id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Novo Diagnóstico
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnóstico</label>
                                <input id="nome-novo-diagnostico" type="text" name="brand" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Exemplo: Epilepsia">
                            </div>
                            <div id="div-selects-sintomas">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sintomas</label>
                                <select id="select-sintomas" class="select-sintomas mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    @foreach ($symptoms as $s)
                                    <option value="{{ $s->id }}">{{ $s->id }} - {{ $s->name }}</option>
                                    @endforeach
                                </select>
                                <button onClick="addInputSintomaAoDiagnostico(false)" id="button-select-sintomas" class="mt-1 mb-1 block w-full p-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> + </button>
                            </div>
                            <div id="div-selects-medicamentos">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medicamentos Sugeridos</label>
                                <select id="select-medicamentos" class="select-medicamentos mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    @foreach ($medicines as $m)
                                        <option value="{{ $m->id }}">{{ $m->id }} - {{ $m->name }}</option>
                                    @endforeach
                                </select>
                                <button onCLick="addInputMedicamentoAoDiagnostico(false)" id="button-select-medicamentos" class="mb-1 block w-full p-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> + </button>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button onclick="cadastreDiagnostico()" data-modal-hide="edit-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($diagnoses as $diagnose)
            <div id="delete-modal-{{ $diagnose['id'] }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Excluir Diagnóstico
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-modal-{{ $diagnose['id'] }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Deseja realmente excluir o diagnóstico "{{ $diagnose['name'] }}"?
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button onclick="deleteDiagnostico({{ $diagnose['id'] }})" data-modal-hide="delete-modal-{{ $diagnose['id'] }}" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>