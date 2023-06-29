<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Brease - Painel do Administrador</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body>
    <div class="container flex min-h-screen min-w-full h-screen">
        <div id="side-navbar" class="min-h-screen bg-gray-200 w-1/5 shadow-2xl py-2">
            <div id="logo-brease" class="p-3 text-white flex justify-center py-16">
                <img src="{{URL::asset('/image/logo.svg')}}" alt="profile Pic" height="120" width="120">
            </div>
            <div id="cadastro-medicamentos" class=" p-3 pt-12 text-gray-900 mx-4">
                <a class="flex" href="">
                    <div class="w-5 mr-3 flex justify-center">
                        <img src="{{URL::asset('/image/med-icon.svg')}}" alt="profile Pic" height="15" width="15">
                    </div>
                    <p>Cadastro de Medicamentos</p>
                </a>
            </div>
            <div id="cadastro-sintomas" class="p-3 text-gray-900 mx-4">
                <a class="flex" href="">
                    <div class="w-5 mr-3 flex justify-center">
                        <img src="{{URL::asset('/image/sym-icon.svg')}}" alt="profile Pic" height="18" width="18">
                    </div>
                    <p>Cadastro de Sintomas</p>
                </a>
            </div>
            <div id="docs" class="p-3 text-gray-900 mx-4">
                <a class="flex" href="">
                    <div class="w-5 mr-3 flex justify-center">
                        <img src="{{URL::asset('/image/doc-icon.svg')}}" alt="profile Pic" height="15" width="15">
                    </div>
                    <p>Validação de Documentos</p>
                </a>
            </div>
            <div id="config-pushs" class="p-3 text-gray-900 mx-4">
                <a class="flex" href="">
                    <div class="w-5 mr-3 flex justify-center">
                        <img src="{{URL::asset('/image/set-icon.svg')}}" alt="profile Pic" height="18" width="18">
                    </div>
                    <p>Push Notifications</p>
                </a>
            </div>
        </div>

        <div id="container-content" class="bg-white w-4/5 p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/sym-icon.svg')}}" alt="profile Pic" height="30" width="30">
                        </div>
                        <p>Cadastro de Sintomas</p>
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
                            <th class="rounded-tl-xl">
                                <p class="ml-3 flex text-white">ID</p>
                            </th>
                            <th class="">
                                <p class="flex text-white">Nome Sintoma</p>
                            </th>
                            <th>
                                <p class="flex text-white">Diagnóstico</p>
                            </th>
                            <th>
                                <p class="flex text-white">Escala</p>
                            </th>
                            <th>
                                <p class="flex text-white">Editar</p>
                            </th>
                            <th class="rounded-tr-xl">
                                <p class="flex text-white">Excluir</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        <tr>
                            <td class="px-4">1</td>
                            <td class="px-4">Febre</td>
                            <td class="px-4">Sinusite</td>
                            <td class="px-4">1-10</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2">Editar</td>
                            <td class="px-4 underline decoration-pink-400 decoration-2">Excluir</td>
                        </tr>
                        <tr>
                            <td class="px-4">2</td>
                            <td class="px-4">Náusea</td>
                            <td class="px-4">Sinusite</td>
                            <td class="px-4">1-10</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2">Editar</td>
                            <td class="px-4 underline decoration-pink-400 decoration-2">Excluir</td>
                        </tr>
                        <tr>
                            <td class="px-4">3</td>
                            <td class="px-4">Refluxo</td>
                            <td class="px-4">Gastrite</td>
                            <td class="px-4">1-10</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2">Editar</td>
                            <td class="px-4 underline decoration-pink-400 decoration-2">Excluir</td>
                        </tr>
                        <tr>
                            <td class="px-4">4</td>
                            <td class="px-4">Tosse</td>
                            <td class="px-4">Bronquite</td>
                            <td class="px-4">1-10</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2">Editar</td>
                            <td class="px-4 underline decoration-pink-400 decoration-2">Excluir</td>
                        </tr>
                        <tr>
                            <td class="px-4">5</td>
                            <td class="px-4">Secreção Nasal</td>
                            <td class="px-4">Gripe</td>
                            <td class="px-4">1-10</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2">Editar</td>
                            <td class="px-4 underline decoration-pink-400 decoration-2">Excluir</td>
                        </tr>
                        <tr>
                            <td class="px-4">6</td>
                            <td class="px-4">Tremores</td>
                            <td class="px-4">Bronquite</td>
                            <td class="px-4">1-10</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2">Editar</td>
                            <td class="px-4 underline decoration-pink-400 decoration-2">Excluir</td>
                        </tr>
                        <tr class="bg-gray-800 h-10">
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
        </div>
    </div>
</body>

</html>