@include('components.header')

<body>
    <div class="container flex min-h-screen min-w-full h-screen">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/dadosbar.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                        <p>Extração de Dados</p>
                    </a>
                </div>
                <div id="perfil-administrador flex content-center" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/prof-icon.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                    </a>
                </div>
                <head>
    </div>
</body>

<title>Dados</title>
    <b></b>
    <div id="main" class="m-8 grid grid-cols-3 gap-1 justify-evenly">
    <div class="flex justify-center text-white bg-gray-800 col-span-3 rounded-lg h-12">Usuários</div>
        <div class="flex justify-center text-black bg-gray-300 rounded-lg h-12">Admin Master</div>
        <div class="flex justify-center text-black bg-gray-300 rounded-lg h-12">Admin</div>
        <div class="flex justify-center text-black bg-gray-300 rounded-lg h-12">Captador</div>
        <div class="flex justify-center text-black bg-gray-300 rounded-lg h-12">Prescritor</div>
        <div class="flex justify-center text-black bg-gray-300 rounded-lg h-12">Paciente</div>
        <div class="flex justify-center text-black bg-gray-300 rounded-lg h-12">Total</div>   
        </div>
        <title>Dados</title>
    <div id="main" class="m-8 grid grid-cols-2 gap-1 justify-evenly">
        <div class="flex justify-center text-black bg-gray-300 rounded-lg h-12">Medicamentos</div>
        <div class="flex justify-center text-black bg-gray-300 rounded-lg h-12">Diagnósticos</div>
        <div class="flex justify-center text-black bg-gray-300 rounded-lg h-12">Vouchers Criados</div>
        <div class="flex justify-center text-black bg-gray-300 rounded-lg h-12">Campanhas Enviadas</div>    
    </div>
    

            <div id="tabela-medicamentos" class="h-5/6 my-20 rounded-xl shadow">
                <table class="table-auto w-full h-full text-xs rounded-xl">
                    <thead class="h-16">
                        <tr class="bg-gray-800">
                            <th class="rounded-tl-xl px-4">
                                <p class="flex text-white">ID</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Data do Cadastro</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Usuário</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Perfil</p>
                            </th>
                            <th class="px-4">
                                <p class="flex justify-end text-white">Nível</p>
                            </th>
                            <th class="rounded-tr-xl px-4">
                                <p class="flex justify-center text-white">Ver</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
    
                        <tr class="h-10 bg-gray-50">

                        <tr class="h-10">
 
                            <td class="px-4">id</td>
                            <td class="px-4">name</td>
                            <td class="px-4">symptoms_concat</td>
                            <td class="px-4">medicines_concat</td>
                            <td class="px-4">.</td>
                            </td>
                            <td class="px-4">t.</td>
                            </td>
                        </tr>


                        <tr class="bg-gray-800 h-10">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4"></td>
                            <td class="px-4 rounded-br-xl">
                                <button data-modal-target="add-modal" data-modal-toggle="add-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 my-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Filtrar</button>
                            
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
                        <div date-rangepicker class="flex items-center">
                         <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                        </div>
                        <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecione a data de inicio">
                        </div>
                        <span class="mx-4 text-gray-500">to</span>
                        <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                       <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                     </svg>
                    </div>
                    <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecione a data final">
                     </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button onclick="cadastreDiagnostico()" data-modal-hide="edit-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Filtrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>