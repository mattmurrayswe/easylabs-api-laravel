@include('components.header')

<body>
    <div class="container flex min-h-screen min-w-full h-screen">
        
        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/users-group.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                        <p>Usuários</p>
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
                                <p class="flex text-white">Usuários</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Perfil</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Nivel</p>
                            <th class="px-4">                            
                            <th class="px-4">
                            <th class="px-1">
                            <th class="px-4">
                            <th class="px-4">
                            <p class="flex justify-end text-white">Permissões</p>
                            </th>
                            <th class="rounded-tr-xl px-4">
                                <p class="flex justify-start text-white">Excluir</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        <tr>
                            <td class="px-4">1</td>
                            <td class="px-4">Usuário Número Um</td>
                            <td class="px-4">Admin Master</td>
                            <td class="px-4">0</td>
                            <th class="px-4"> 
                            <th class="px-4">
                            <th class="px-4">     
                            <th class="px-4">                       
                            <td data-modal-target="permi-modal" data-modal-toggle="permi-modal" id="permissao"  class="px-4 underline decoration-green-400 decoration-2 hover:text-green-600 focus:text-red">
                            <p class="flex justify-end">Permissões</p>                              
                            <td data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="px-4 underline decoration-pink-400 decoration-2 w-1/12 hover:text-red-600 focus:text-red">
                            <p class="flex justify-start">Excluir</p>                          
                        <tr>
                            <td class="px-4">2</td>
                            <td class="px-4">Usuário Número Dois</td>
                            <td class="px-4">Admin</td>
                            <td class="px-4">5</td>
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <td data-modal-target="permi-modal" data-modal-toggle="permi-modal" id="permissao"  class="px-4 underline decoration-green-400 decoration-2 hover:text-green-600 focus:text-red">
                            <p class="flex justify-end">Permissões</p>                                                         
                            <td data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="px-4 underline decoration-pink-400 decoration-2 w-1/12 hover:text-red-600 focus:text-red">
                            <p class="flex justify-start">Excluir</p>                          
                        <tr>
                            <td class="px-4">3</td>
                            <td class="px-4">Usuário Número Tres</td>
                            <td class="px-4">Captador</td>
                            <td class="px-4">4</td>
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <td data-modal-target="permi-modal" data-modal-toggle="permi-modal" id="permissao"  class="px-4 underline decoration-green-400 decoration-2 hover:text-green-600 focus:text-red">
                            <p class="flex justify-end">Permissões</p>      
                            <td data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="px-4 underline decoration-pink-400 decoration-2 w-1/12 hover:text-red-600 focus:text-red">
                            <p class="flex justify-start">Excluir</p>                          
                        <tr>
                            <td class="px-4">4</td>
                            <td class="px-4">Usuário Número Quatro</td>
                            <td class="px-4">Prescritor</td>
                            <td class="px-4">3</td>
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <td data-modal-target="permi-modal" data-modal-toggle="permi-modal" id="permissao"  class="px-4 underline decoration-green-400 decoration-2 hover:text-green-600 focus:text-red">
                            <p class="flex justify-end">Permissões</p>                                                             
                            <td data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="px-4 underline decoration-pink-400 decoration-2 w-1/12 hover:text-red-600 focus:text-red">
                            <p class="flex justify-start">Excluir</p>                          
                        <tr>
                            <td class="px-4">5</td>
                            <td class="px-4">Usuário Número Cinco</td>
                            <td class="px-4">Paciente</td>
                            <td class="px-4">2</td>
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <td data-modal-target="permi-modal" data-modal-toggle="permi-modal" id="permissao"  class="px-4 underline decoration-green-400 decoration-2 hover:text-green-600 focus:text-red">
                            <p class="flex justify-end">Permissões</p>                                                           
                            <td data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="px-4 underline decoration-pink-400 decoration-2 w-1/12 hover:text-red-600 focus:text-red">
                            <p class="flex justify-start">Excluir</p>                          
                        <tr>
                            <td class="px-4">6</td>
                            <td class="px-4">Usuário Número Seis</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">1</td>  
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4"> 
                            <th class="px-4">                   
                            <td data-modal-target="permi-modal" data-modal-toggle="permi-modal" id="permissao"  class="px-4 underline decoration-green-400 decoration-2 hover:text-green-600 focus:text-red">
                            <p class="flex justify-end">Permissões</p>                                                            
                             <td data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="px-4 underline decoration-pink-400 decoration-2 w-1/12 hover:text-red-600 focus:text-red">
                            <p class="flex justify-start">Excluir</p>  
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
                            <th class="px-4"></td>
                            <th class="px-4"></td>
                            <button data-modal-target="add-modal" data-modal-toggle="add-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 my-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Novo</button>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<div id="delete-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Excluir Usuário?
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Deseja realmente excluir o Usuário?
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button onclick="deleteMedicamento()" data-modal-hide="delete-modal" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<div id="permi-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Permissões
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="permi-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div>
                                
                            <div id="div-selects-sintomas">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perfil</label>
                                <select id="select-sintomas" class="select-sintomas mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="1">Paciente</option> 
                                <option value="2">Administrador Master</option>
                                 <option value="3">Admin</option>
                                 <option value="4">Captador</option>
                                 <option value="5">Prescritor</option>
                                </select>
                            </div>
                            <div id="div-selects-sintomas">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nivel</label>
                                <select id="select-sintomas" class="select-sintomas mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="1">0</option> 
                                <option value="2">1</option>
                                 <option value="3">2</option>
                                 <option value="4">3</option>
                                 <option value="5">4</option>
                                 <option value="5">5</option>
                                </select>
                            </div>
                            <div id="div-selects-medicamentos">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permissões</label>
                                <select id="select-medicamentos" class="select-medicamentos mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">          
                                <option selected="1">Nível Permissões</option> 
                                <option value="2">Perfis Usuário</option>
                                 <option value="3">Usuários</option>
                                 <option value="4">Pacientes</option>
                                 <option value="5">Farmácias</option>
                                 <option value="6">Prescritores</option>
                                 <option value="7">Validar Prescritores</option>
                                 <option value="8">Criar QRCode</option>
                                 <option value="9">Ler Logs QRCodes acessados </option>
                                </select>
                                <button onCLick="addInputMedicamentoAoDiagnostico(false)" id="button-select-medicamentos" class="mb-1 block w-full p-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> + </button>
                            </div>

                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button onclick="cadastreDiagnostico()" data-modal-hide="permi-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aplicar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Novo Usuario
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
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome Usuario</label>
                                <input id="nome-novo-diagnostico" type="text" name="brand" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="">
                            </div>
                            <div id="div-selects-sintomas">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perfil</label>
                                <select id="select-sintomas" class="select-sintomas mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="1">Paciente</option> 
                                <option value="2">Administrador Master</option>
                                 <option value="3">Admin</option>
                                 <option value="4">Captador</option>
                                 <option value="5">Prescritor</option>
                                </select>
                            </div>
                            <div id="div-selects-medicamentos">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permissões</label>
                                <select id="select-medicamentos" class="select-medicamentos mb-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">          
                                <option selected="1">Nível Permissões</option> 
                                <option value="2">Perfis Usuário</option>
                                 <option value="3">Usuários</option>
                                 <option value="4">Pacientes</option>
                                 <option value="5">Farmácias</option>
                                 <option value="6">Prescritores</option>
                                 <option value="7">Validar Prescritores</option>
                                 <option value="8">Criar QRCode</option>
                                 <option value="9">Ler Logs QRCodes acessados </option>
                                </select>
                                <button onCLick="addInputMedicamentoAoDiagnostico(false)" id="button-select-medicamentos" class="mb-1 block w-full p-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> + </button>
                            </div>
                        </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button onclick="cadastreDiagnostico()" data-modal-hide="edit-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>

 
</html>