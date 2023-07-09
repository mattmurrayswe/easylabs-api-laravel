@include('components.header')

<body>
    <div class="container flex min-h-screen min-w-full h-screen">

        @include('components.sidebar')

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
                        @foreach ($medicamentos as $medicamento)
                            <tr>
                                <td class="px-4">{{ $medicamento->id }}</td>
                                <td class="px-4">{{ $medicamento->name }}</td>
                                <td class="px-4">{{ $medicamento->presentation }}</td>
                                <td class="px-4">{{ $medicamento->concentration }}</td>
                                <td class="px-4">{{ $medicamento->volume_flask }}</td>
                                <td class="px-4">{{ $medicamento->formulation }}</td>
                                <td class="px-4">{{ $medicamento->lab }}</td>
                                <td class="px-4 underline decoration-blue-400 decoration-2"><p class="flex justify-end">Editar</p></td>
                                <td class="px-4 underline decoration-pink-400 decoration-2 w-1/12"><p class="flex justify-start">Excluir</p></td>
                            </tr>
                        @endforeach
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