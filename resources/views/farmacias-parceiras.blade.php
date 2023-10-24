@include('components.header')

<body>
    <div class="flex">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 ml-[20%] p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-5 mr-2 flex justify-center">
                            <img src="{{URL::asset('/image/farmacias-parceiras.svg')}}" alt="profile Pic" height="40" width="40">
                        </div>
                        <p>Farmácias Parceiras</p>
                    </a>
                </div>
                <div id="perfil-administrador flex content-center" class="text-gray-900 text-xl font-medium underline">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
            <div class="h-10 my-5 flex items-center w-full">
                <div id="alert-3" style="display:none" class="flex items-center w-full p-4 text-green-50 rounded-lg bg-green-800 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                      Alterações realizadas com sucesso.
                    </div>
                    <button type="button" onClick="closeAlert()" class="ml-auto -mx-1.5 -my-1.5 bg-green-800 text-green-50 rounded-lg focus:ring-2 p-1.5 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" aria-label="Close">
                      <span class="sr-only">Close</span>
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                    </button>
                </div>
            </div>
            <div id="tabela-medicamentos" class="h-5/6 mb-20">
                <div class="mb-2">
                    <form action="{{ url('/farmacias-parceiras') }}" method="GET">
                        <div class="flex">
                            <div class="flex-1 mr-1">
                                <input id="search" type="text" name="search" value="{{ $search }}" placeholder="Filtro" class="px-3 py-2 border rounded-lg w-full focus:outline-none">
                            </div>
                            <div>
                                <button type="submit" class="bg-blue-700 hover:bg-blue-800 focus:ring-1 focus:outline-none focus:ring-blue-300 text-white px-4 py-2 rounded-lg">Filtrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table-auto w-full h-full text-xs rounded-xl">
                    <thead class="h-16">
                        <tr class="bg-gray-800">
                            <th class="rounded-tl-xl px-4">
                                <p class="flex text-white">ID</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Nome da Unidade</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Rede</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">E-mail</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">CEP</p>
                            </th>
                            <th class="px-4">
                                <p class="flex justify-end text-white">Visualizar/Editar</p>
                            </th>
                            <th class="rounded-tr-xl px-4">
                                <p class="flex justify-start text-white">Excluir</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        @php($i = 0)
                        @foreach ($clinics as $c)
                        @if ($i % 2 == 0)
                        <tr class="h-10 bg-gray-50">
                            @else
                        <tr class="h-10">
                            @endif
                            <td class="px-4">{{ $c->id }}</td>
                            <td class="px-4">{{ $c->unidade }}</td>
                            <td class="px-4">{{ $c->rede }}</td>
                            <td class="px-4">{{ $c->email }}</td>
                            <td class="px-4">{{ $c->cep }}</td>
                            <td data-modal-target="editModal-{{ $c->id }}" data-modal-toggle="editModal-{{ $c->id }}" id="editar" class="px-4 underline decoration-blue-400 decoration-2 hover:text-blue-600 focus:text-red">
                                <p class="flex justify-end">Visualizar/Editar</p>
                            </td>
                            <td data-modal-target="delete-modal-{{ $c->id }}" data-modal-toggle="delete-modal-{{ $c->id }}" class="px-4 underline decoration-pink-400 decoration-2 w-1/12 hover:text-red-600 focus:text-red">
                                <p class="flex justify-start">Excluir</p>
                            </td>
                        </tr>
                        @php($i++)
                        @endforeach
                        <tr class="bg-gray-800 max-h-5 h-5">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4" colspan="2"> <!-- Use colspan to span across two columns -->
                                <div class="flex justify-center items-center h-full">
                                    {{ $clinics->links() }}
                                </div>
                            </td>
                            <td class="pl-4 pr-1 text-end">
                                <button data-modal-target="add-modal" data-modal-toggle="add-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 my-2.5 text-center">Novo</button>
                            </td>
                            <td>
                                <button type="button" onCLick="exportFarmacias()" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-600 font-medium rounded-lg text-sm px-5 py-2.5 my-2.5 text-center">Exportar</button>
                            </td>
                            <td class="text-right">
                                <label class="px-5 py-2.5 mr-2.5 w-fit rounded-lg bg-gray-500 w-fill cursor-pointer">
                                    Escolher Arquivo
                                    <input id="fileInput" type="file" name="file" accept=".xlsx, .csv" style="display: none;">
                                </label>
                            </td>
                            <td class="rounded-br-xl text-start" colspan=2>
                                @csrf
                                <button  onClick="importDataFarmacias()" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2.5 text-center" type="submit">Importar</button>
                            </td>
                        </tr>
                        <tr class="h-0">
                            <td class="px-4 rounded-bl-xl"></td>
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

</body>
<div data-modal-backdrop="static" id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Adicionar Nova Farmácia
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="add-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Fechar</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="flex justify-between">
                    <div class="flex flex-wrap">
                        <div class="mb-4 w-[400px]">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Nome da Rede</label>
                            <input type="text" id="rede" value="" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                        </div>
                        <div class="mb-2 w-[400px]">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Nome da Unidade </label>
                            <input type="text" id="unidade" value="" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                        </div>
                    </div>
                    <div class="flex h-[120px]">
                        <div class="flex flex-wrap justify-end items-start h-[40px]">
                                <label class="text-sm font-medium text-gray-900 mb-2">Foto de Perfil</label>
                                <label class="px-5 py-2.5 mb-2.5 text-xs rounded-lg bg-gray-300 cursor-pointer w-fit">
                                    Escolher Arquivo
                                    <input type="file" id="imageUpload" accept="image/*" class="hidden">
                                </label>
                            <div style="display:none" id="imagePreview">
                                <img class="w-20 h-20 rounded-sm" id="previewImage" src="#" alt="Preview Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">CNPJ</label>
                    <input type="text" id="cnpj" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Telefone/Celular</label>
                    <input type="text" id="cellphone" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
                    <input type="text" id="email" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">CEP</label>
                    <input type="text" id="cep" value="" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Rua</label>
                    <input type="text" id="street" value="" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Número</label>
                    <input type="text" id="number" value="" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Complemento</label>
                    <input type="text" id="complement" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Bairro</label>
                    <input type="text" id="neighboor" value="" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Cidade</label>
                    <input type="text" id="city" value="" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">UF</label>
                    <input type="text" id="state" value="" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nome do Responsável</label>
                    <input type="text" id="cpf" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">CPF Responsável</label>
                    <input type="text" id="cpf" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-end items-center p-8 space-x-8 border-t-8 border-gray-200 rounded-b">
                <button onclick="cadastreFarmacia()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Adicionar</button>
            </div>
        </div>
    </div>
</div>
</body>

@foreach ($clinics as $c)
<div data-modal-backdrop="static" id="editModal-{{$c->id}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Editar
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="editModal-{{$c->id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Fechar</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nome da Rede</label>
                    <input type="text" id="rede-{{$c->id}}" value="{{$c->rede}}" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nome da Unidade</label>
                    <input type="text" id="unidade-{{$c->id}}" value="{{$c->unidade}}" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">CNPJ</label>
                    <input type="text" id="cnpj-{{$c->id}}" value="{{$c->unidade}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Telefone/Celular</label>
                    <input type="text" id="cellphone-{{$c->id}}" value="{{$c->cellphone}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
                    <input type="text" id="email-{{$c->id}}" value="{{$c->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">CEP</label>
                    <input type="text" id="cep-{{$c->id}}" value="{{$c->cep}}" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Cidade</label>
                    <input type="text" id="city-{{$c->id}}" value="{{$c->city}}" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Estado</label>
                    <input type="text" id="state-{{$c->id}}" value="{{$c->state}}" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Rua</label>
                    <input type="text" id="street-{{$c->id}}" value="{{$c->street}}" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Número</label>
                    <input type="text" id="number-{{$c->id}}" value="{{$c->number}}" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Bairro</label>
                    <input type="text" id="neighboor-{{$c->id}}" value="{{$c->neighboor}}" onChange="removaOuAdicioneBorderRed(this)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Complemento</label>
                    <input type="text" id="complement-{{$c->id}}" value="{{$c->complement}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nome do Responsável</label>
                    <input type="text" id="name-{{$c->id}}" value="{{$c->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">CPF Responsável</label>
                    <input type="text" id="cpf-{{$c->id}}" value="{{$c->cpf}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button onClick="editFarmacia({{$c->id}})" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Salvar</button>
            </div>
        </div>
    </div>
</div>
<div data-modal-backdrop="static" id="delete-modal-{{ $c->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Excluir Farmácia
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="delete-modal-{{ $c->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Fechar</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500">
                    Deseja realmente excluir a Farmácia?
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button onclick="deleteFarmacia({{ $c->id }})" data-modal-hide="delete-modal-{{ $c->id }}" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Excluir</button>
            </div>
        </div>
    </div>
</div>
@endforeach


<div data-modal-backdrop="static" id="visu-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Visualizar
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="visu-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Fechar</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500">
                <div>
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Nome da Rede</label>
                    <input type="text" name="brand" id="input-add-name" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Número</label>
                    <input type="text" name="brand" id="input-add-presentation" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Nome da Unidade</label>
                    <input type="text" name="brand" id="input-add-concentration" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">CEP</label>
                    <input type="text" name="brand" id="input-add-volume_flask" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Cidade</label>
                    <input type="text" name="brand" id="input-add-formulation" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>
                <div>
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">E-mail da rede</label>
                    <input type="text" name="brand" id="input-add-lab" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                </div>

            </div>
            <!-- Modal footer -->
            <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button data-modal-hide="visu-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Editar</button>
            </div>
        </div>
    </div>
</div>

<div id="filtro-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Filtrar as Farmacias
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="filtro-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Fechar</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500">
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="1">Farmacia1</option>
                        <option value="2">Farmacia2</option>
                        <option value="3">Farmacia3</option>
                        <option value="4">Farmacia4</option>
                        <option value="5">Farmacia5</option>
                    </select>
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Bairro</label>
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="1">Santa Felicidade</option>
                        <option value="2">Batel</option>
                        <option value="3">Merces</option>
                        <option value="4">Portão</option>
                        <option value="5">Agua Verde</option>
                    </select>
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Lougradouro</label>
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="1">xxxx</option>
                        <option value="2">uuuuu</option>
                        <option value="3">yyyy</option>
                        <option value="4">vvvvvv</option>
                        <option value="5">sssss</option>
                    </select>
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Estado</label>
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="1">PR</option>
                        <option value="2">SP</option>
                        <option value="3">RJ</option>
                        <option value="4">MG</option>
                        <option value="5">PB</option>
                    </select>
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Cidade</label>
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="1">Curitiba</option>
                        <option value="2">São Paulo</option>
                        <option value="3">Campo Grande</option>
                        <option value="4">Blumenau</option>
                        <option value="5">São José do Rio Preto</option>
                    </select>
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Rede</label>
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

            </div>
            <!-- Modal footer -->
            <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button data-modal-hide="filtro-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Filtrar</button>
            </div>
        </div>
    </div>
</div>

<script src="{{URL::asset('/js/farmacias-parceiras.js')}}"></script>