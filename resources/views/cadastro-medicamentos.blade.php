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
        <div id="side-navbar" class="min-h-screen bg-gray-900 w-1/5 shadow-2xl py-2">
            <div id="logo-brease" class="p-3 text-white flex justify-center py-16">
                <img src="{{URL::asset('/image/logo.svg')}}" alt="profile Pic" height="100" width="100">
            </div>
            <div id="cadastro-medicamentos" class="p-3 text-white"> <a href=""> Cadastro de Medicamentos</a></div>
            <div id="cadastro-sintomas" class="p-3 text-white"><a href="">Cadastro de Sintomas</a></div>
            <div id="docs" class="p-3 text-white"><a href="">Validação de Documentos</a></div>
            <div id="config-pushs" class="p-3 text-white"><a href="">Push Notifications</a></div>
        </div>

        <div id="container-content" class="bg-white w-4/5 p-20 h-screen">
            <div id="titulo-pagina" class="text-gray-900 text-xl underline">Cadastro de Medicamentos</div>
            <div id="tabela-medicamentos" class="h-fit my-20 border border-gray-300 rounded-xl">
                <table class="table-auto w-full h-full">
                    <thead class="h-24">
                        <tr class="bg-gray-900">
                            <th class="rounded-tl-xl">
                                <p class="flex justify-center text-white">Nome Medicamento</p>
                            </th>
                            <th>
                                <p class="flex text-white">Apresentação</p>
                            </th>
                            <th>
                                <p class="flex text-white">Concentração</p>
                            </th>
                            <th>
                                <p class="flex text-white">Volume Frasco</p>
                            </th>
                            <th>
                                <p class="flex text-white">Formulação</p>
                            </th>
                            <th class="rounded-tr-xl">
                                <p class="flex text-white">Laboratório</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        <tr>
                            <td class="px-4">Extrato de Cannabis</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">4.00 mg/ml</td>
                            <td class="px-4">30ml</td>
                            <td class="px-4">Isolado</td>
                            <td class="px-4">Ease Labs</td>
                        </tr>
                        <tr>
                            <td class="px-4">Extrato de Cannabis</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">17.18 mg/ml</td>
                            <td class="px-4">50ml</td>
                            <td class="px-4">Fitoterápico</td>
                            <td class="px-4">Green</td>
                        </tr>
                        <tr>
                            <td class="px-4">Canabidiol Fitofarmaco</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">4.00 mg/ml</td>
                            <td class="px-4">30ml</td>
                            <td class="px-4">Isolado</td>
                            <td class="px-4">Ease Labs</td>
                        </tr>
                        <tr>
                            <td class="px-4">Canabidiol Fitofarmaco</td>
                            <td class="px-4">Gotas</td>
                            <td class="px-4">17.18 mg/ml</td>
                            <td class="px-4">50ml</td>
                            <td class="px-4">Fitoterápico</td>
                            <td class="px-4">Green</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>