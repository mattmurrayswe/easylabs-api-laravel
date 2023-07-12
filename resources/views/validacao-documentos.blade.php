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
                            </th>
                            <th class="px-4">
                            <th class="px-4">
                                <p class="flex justify-end text-white">Validar</p>
                            </th>
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
                            <th class="px-4">
                            <th class="px-4">
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end hover:text-blue-600 focus:text-red">Validar</p></td>
                        </tr>
                        <tr>
                            <td class="px-4">2</td>
                            <td class="px-4">DR.Paulo Roberto</td>
                            <th class="px-4">                   
                            <td class="px-4">CRM</td>
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end hover:text-blue-600 focus:text-red">Validar</p></td>
                        </tr>
                        <tr>
                            <td class="px-4">3</td>
                            <td class="px-4">DR. Marcos Bello</td>
                            <th class="px-4">
                            <td class="px-4">CPF, RG</td>
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end hover:text-blue-600 focus:text-red">Validar</p></td>
                        </tr>
                        <tr>
                            <td class="px-4">4</td>
                            <td class="px-4">DR.Daniel Rodrigo</td>
                            <th class="px-4">
                            <td class="px-4">Comprovante De Residencia, CPF</td>
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end hover:text-blue-600 focus:text-red">Validar</p></td>
                        </tr>
                        <tr>
                            <td class="px-4">5</td>
                            <td class="px-4">DR.Leonardo Teles</td>
                            <th class="px-4">
                            <td class="px-4">CRM, CPF, RG</td>
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end hover:text-blue-600 focus:text-red">Validar</p></td>
                        </tr>
                        <tr>
                            <td class="px-4">6</td>
                            <td class="px-4">DR. Gabriel Zogbi</td>
                            <th class="px-4">
                            <td class="px-4">CPF</td>
                            <th class="px-4">
                            <th class="px-4">
                            <th class="px-4">
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end hover:text-blue-600 focus:text-red">Validar</p></td>
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
                            <td class="px-4 rounded-br-xl"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>