@include('components.header')

<body>
    <div class="container flex min-h-screen min-w-full h-screen">
        
        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 p-20 h-screen">
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
                                <p class="flex text-white">Prescritores</p>
                            </th>
                            <th class="px-4">
                            <th class="px-4">
                                <p class="flex text-white">Documentos Pendentes</p>
                            </th>
                            <th class="px-4">
                               
                            </th>
                            <th class="px-4">
                                <p class="flex justify-end text-white">Validar</p>
                            <th class="rounded-tr-xl px-4">
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        <tr>
                            <td class="px-4">1</td>
                            <td class="px-4">DR.Gustavo Toledo</td>
                            <th class="px-4">
                            <td class="px-4">CPF, RG, CRM</td>
                            <th class="px-4">
                            <td data-modal-target="editModal" data-modal-toggle="editModal" id="editar" class="px-4 underline decoration-blue-400 decoration-2">
                                <p class="flex justify-end">validar</p>
                        <tr>
                            <td class="px-4">2</td>
                            <td class="px-4">DR.Paulo Roberto</td>
                            <th class="px-4">                   
                            <td class="px-4">CRM</td>
                            <th class="px-4">
                            <td data-modal-target="editModal" data-modal-toggle="editModal" id="editar" class="px-4 underline decoration-blue-400 decoration-2">
                                <p class="flex justify-end">validar</p>
                        <tr>
                            <td class="px-4">3</td>
                            <td class="px-4">DR. Marcos Bello</td>
                            <th class="px-4">
                            <td class="px-4">CPF, RG</td>
                            <th class="px-4">
                            <td data-modal-target="editModal" data-modal-toggle="editModal" id="editar" class="px-4 underline decoration-blue-400 decoration-2">
                                <p class="flex justify-end">validar</p>
                        <tr>
                            <td class="px-4">4</td>
                            <td class="px-4">DR.Daniel Rodrigo</td>
                            <th class="px-4">
                            <td class="px-4">Comprovante De Residencia, CPF</td>
                            <th class="px-4">
                            <td data-modal-target="editModal" data-modal-toggle="editModal" id="editar" class="px-4 underline decoration-blue-400 decoration-2">
                                <p class="flex justify-end">validar</p>                       
                        <tr>
                            <td class="px-4">5</td>
                            <td class="px-4">DR.Leonardo Teles</td>
                            <th class="px-4">
                            <td class="px-4">CRM, CPF, RG</td>
                            <th class="px-4">
                            <td data-modal-target="editModal" data-modal-toggle="editModal" id="editar" class="px-4 underline decoration-blue-400 decoration-2">
                                <p class="flex justify-end">validar</p>
                        </tr>
                        <tr>
                            <td class="px-4">6</td>
                            <td class="px-4">DR. Gabriel Zogbi</td>
                            <th class="px-4">
                            <td class="px-4">CPF</td>
                            <th class="px-4">
                            <td data-modal-target="editModal" data-modal-toggle="editModal" id="editar" class="px-4 underline decoration-blue-400 decoration-2">
                                <p class="flex justify-end">validar</p>
                        </tr>
                        <tr class="bg-gray-800 h-10">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-8"></td>
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
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">

                        </div>
                    </div>
                </div>
            </div>

            <div id="editModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Validar Documentos
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editModal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Valide os Documentos
                            </p>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documentos</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="CRM">CRM</option>
                            <option value="CPF">CPF</option>
                            <option value="RG">RG</option>
                            <option value="COMPROVANTE">Comprovante de Residencia</option>
                        </select>
                    </div>
                    
                            </p>
                        </div>
                        <!-- Modal footer -->                         
                        <div class="box items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="editModal" type="button" class="text-white bg-stone-700 hover:bg-stone-800 focus:ring-4 focus:outline-none focus:ring-stone-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-stone-600 dark:hover:bg-stone-700 dark:focus:ring-stone-800">Baixar</button> 
                        <button data-modal-hide="editModal" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Invalidar</button> 
                        <button data-modal-hide="editModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Validar</button> 
                    </div>
                </div>
           </div>  

</html>
