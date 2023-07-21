@include('components.header')

<body>
    <div class="container flex min-h-screen min-w-full h-screen">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/apps.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                        <p>Nivel de Permissões
                        </p>
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
                                <p class="flex text-white">Nível</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Nenhuma</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Ler</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Escrever</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Excluir</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Setup</p>
                            </th>
                            <th class="px-4">
                                <p class="flex justify-end text-white">Define Permissões</p>
                            </th>
                            <th class="rounded-tr-xl px-4">
                                <p class="flex justify-center text-white">Todas</p>
                            </th>
                    <tbody class="my-20 bg-white rounded-xl">
                    <tbody class="my-20 bg-white rounded-xl">
                        <tr class="h-10 bg-gray-50">
                        <tr class="h-10">
                            </tr>
                        <tr class="bg-gray-800 h-10">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
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


            <div id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Permissões
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
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID</label>
                                <input id="nome-novo-diagnostico" type="text" name="brand" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Exemplo: Epilepsia">
                            </div>
                            <div id="div-selects-sintomas">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nivel</label>
                                <select id="select-sintomas" class="select-sintomas mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                                    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Permissões</h3>
                                    <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                      <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                      <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nenhuma</label>
                                       </div>
                                        </li>
                                   <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                   <div class="flex items-center pl-3">
                                   <input id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                   <label for="react-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ler</label>
                                    </div>
                                    </li>
                                     <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                   <input id="angular-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                   <label for="angular-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Escrever</label>
                                   </div>
                                      </li>
                                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                   <div class="flex items-center pl-3">
                                  <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                 <label for="laravel-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Excluir</label>
                                 </div>
                                 </li>
                                      </li>
                                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                   <div class="flex items-center pl-3">
                                  <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                 <label for="laravel-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Setup</label>
                                 </div>
                                 </li>
                                      </li>
                                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                   <div class="flex items-center pl-3">
                                  <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                 <label for="laravel-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Define Permissões</label>
                                 </div>
                                 </li>
                                </ul>


                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button onclick="cadastreDiagnostico()" data-modal-hide="edit-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>

</html>