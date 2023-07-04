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

        @include('sidebar')

        <div id="container-content" class="bg-white w-4/5 p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/med-icon.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                        <p>Cadastro de Medicamentos</p>
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
                                <p class="flex justify-start text-white">Excluir</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        <tr>
                            <td class="px-4">1</td>
                            <td class="px-4">Extrato de Cannabis</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">4.00 mg/ml</td>
                            <td class="px-4">30ml</td>
                            <td class="px-4">Isolado</td>
                            <td class="px-4">Ease Labs</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end">Editar</p></td>
                            <td class="px-4 underline decoration-pink-400 decoration-2 w-1/12"><p class="flex justify-start">Excluir</p></td>
                        </tr>
                        <tr>
                            <td class="px-4">2</td>
                            <td class="px-4">Extrato de Cannabis</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">17.18 mg/ml</td>
                            <td class="px-4">50ml</td>
                            <td class="px-4">Fitoterápico</td>
                            <td class="px-4">Green</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end">Editar</p></td>
                            <td class="px-4 underline decoration-pink-400 decoration-2 w-1/12"><p class="flex justify-start">Excluir</p></td>
                        </tr>
                        <tr>
                            <td class="px-4">3</td>
                            <td class="px-4">Extrato de Cannabis</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">17.18 mg/ml</td>
                            <td class="px-4">70ml</td>
                            <td class="px-4">Fitoterápico</td>
                            <td class="px-4">Green</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end">Editar</p></td>
                            <td class="px-4 underline decoration-pink-400 decoration-2 w-1/12"><p class="flex justify-start">Excluir</p></td>
                        </tr>
                        <tr>
                            <td class="px-4">4</td>
                            <td class="px-4">Canabidiol Fitofarmaco</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">4.00 mg/ml</td>
                            <td class="px-4">30ml</td>
                            <td class="px-4">Isolado</td>
                            <td class="px-4">Ease Labs</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end">Editar</p></td>
                            <td class="px-4 underline decoration-pink-400 decoration-2 w-1/12"><p class="flex justify-start">Excluir</p></td>
                        </tr>
                        <tr>
                            <td class="px-4">5</td>
                            <td class="px-4">Canabidiol Fitofarmaco</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">17.18 mg/ml</td>
                            <td class="px-4">50ml</td>
                            <td class="px-4">Fitoterápico</td>
                            <td class="px-4">Green</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end">Editar</p></td>
                            <td class="px-4 underline decoration-pink-400 decoration-2 w-1/12"><p class="flex justify-start">Excluir</p></td>
                        </tr>
                        <tr>
                            <td class="px-4">6</td>
                            <td class="px-4">Canabidiol Fitofarmaco</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">17.18 mg/ml</td>
                            <td class="px-4">70ml</td>
                            <td class="px-4">Fitoterápico</td>
                            <td class="px-4">Green</td>
                            <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end">Editar</p></td>
                            <td class="px-4 underline decoration-pink-400 decoration-2 w-1/12"><p class="flex justify-start">Excluir</p></td>
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