@include('components.header')

<body>
    <div class="flex">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 ml-[20%] p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/perfuser.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                        <p>Lista de Usuários</p>
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
            <div id="tabela-medicamentos" class="h-5/6 my-20">
                <div class="mb-2">
                    <form action="{{ url('/listar-usuarios') }}" method="GET">
                        <div class="flex">
                            <div class="flex-1 mr-1">
                                <input type="text" name="search" value="{{ $search }}" placeholder="Filtro" class="px-3 py-2 border rounded-lg w-full focus:outline-none">
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
                                <p class="flex text-white">ID Listagem</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">ID Usuário</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Nome Usuário</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Nome Permissão</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">ID Permissão</p>
                            </th>
                            <th class="rounded-tr-xl px-4">
                                <p class="flex justify-end text-white">Editar</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        @foreach ($users as $u)
                        <tr class="h-10 bg-gray-50">
                            <td id="id-listagem" class="px-4">{{$u->unique_id}}</td>
                            <td id="id-usuario" class="px-4">{{$u->id}}</td>
                            <td id="name" class="px-4">{{$u->name}}</td>
                            <td id="permissao" class="px-4">{{$u->permissao->name}}</td>
                            <td id="id-permissao" class="px-4">{{$u->id_permissao}}</td>
                            <td data-modal-target="edit-modal-{{$u->unique_id}}" data-modal-toggle="edit-modal-{{$u->unique_id}}" class="px-4 underline decoration-blue-400 decoration-2 hover:text-blue-600">
                                <p class="flex justify-end underline decoration-blue-400 decoration-2 hover:text-blue-600">Editar</p>
                            </td>
                        </tr>
                        @endforeach
                        <tr class="bg-gray-800 max-h-5 h-5">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4" colspan="4">
                                <div class="py-3">
                                    <div class="w-full flex justify-center items-center">
                                        <p class="text-sm text-white leading-5">
                                            Exibindo
                                            <span class="font-medium">{{ $paginationInfo['startItem'] }}</span>
                                            a
                                            <span class="font-medium">{{ $paginationInfo['endItem'] }}</span>
                                            de
                                            <span class="font-medium">{{ $paginationInfo['totalItems'] }}</span>
                                            resultados
                                        </p>
                                    </div>
                                    <div class="w-full flex justify-center items-center">
                                        <span class="relative z-0 inline-flex shadow-sm rounded-md">
                                            <!-- Previous page link -->
                                            <span aria-disabled="true" aria-label="&laquo; Previous">
                                                <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5" aria-hidden="true">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <!-- Paginator links -->
                                            @foreach ($paginatorLinks as $link)
                                            <a href="{{ $link['url'] }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium {{ $link['isCurrent'] ? 'text-gray-500 bg-gray-200 hover:bg-gray-300' : 'text-gray-700 bg-white border border-gray-300' }} leading-5 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page {{ $link['page'] }}">
                                                {{ $link['page'] }}
                                            </a>
                                            @endforeach
                                            <!-- Next page link -->
                                            <a href="{{ request()->fullUrlWithQuery(['page' => $currentPage + 1, 'search' => $search]) }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md {{ $currentPage >= $lastPage ? 'cursor-not-allowed' : 'hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150' }}" aria-label="Next &raquo;">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 rounded-br-xl">
                                <div class="flex justify-end">
                                    <button data-modal-target="add-modal" data-modal-toggle="add-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 my-2.5 text-center">Novo</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="h-0">
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
            <div id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Adicionar Novo Perfil
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
                            <p class="text-base leading-relaxed text-gray-500">
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                                <input type="text" name="brand" id="input-add-presentation" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button onclick="cadastreMedicamento()" data-modal-hide="add-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Adicionar</button>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($users as $u)
            <div data-modal-backdrop="static" id="edit-modal-{{$u->unique_id}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Editar o Perfil
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="edit-modal-{{$u->unique_id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->

                        <div class="p-6 space-y-6">
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">ID Listagem</label>
                                <input disabled type="text" name="brand" id="id-user-{{$u->unique_id}}" value="{{$u->unique_id}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">ID Usuário</label>
                                <input disabled type="text" name="brand" id="id-user-{{$u->id}}" value="{{$u->id}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Nome Usuário</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->name}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">CPF</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->cpf}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->email}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Telefone</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->cellphone}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Número da Rua</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->street_number}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Complemento</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->complement}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Cidade</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->city}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Estado</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->state}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">CEP</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->cep}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Rua</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->street}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Bairro</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->neighborhood}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div class="space-x-4">
                                <div class="inline-flex items-center">
                                    <input @if($u->active == 1) checked @endif type="radio" id="active-{{$u->unique_id}}" name="active-radios-{{$u->unique_id}}" value="active" class="radio radio-primary form-radio text-primary-600 focus:ring-primary-600 focus:border-primary-600">
                                    <label for="active-{{$u->unique_id}}" class="ml-1 text-sm font-medium text-gray-900">Ativo</label>
                                </div>
                                <div class="inline-flex items-center">
                                    <input type="radio" id="inactive-{{$u->unique_id}}" name="active-radios-{{$u->unique_id}}" value="inactive" class="radio radio-primary form-radio text-primary-600 focus:ring-primary-600 focus:border-primary-600">
                                    <label for="inactive-{{$u->unique_id}}" class="ml-1 text-sm font-medium text-gray-900">Inativo</label>
                                </div>
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Nome Permissão</label>
                                <input disabled type="text" name="brand" id="" value="{{$u->permissao->name}}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                            </div>
                            <div>
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">ID Permissão</label>
                                <input type="text" name="brand" id="id-permissao-new-{{$u->id_permissao}}" value="{{$u->id_permissao}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="">
                                <input type="text" name="brand" id="id-permissao-old-{{$u->id_permissao}}" value="{{$u->id_permissao}}" hidden placeholder="">
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button onclick="editarPermissaoDoUsuario({{$u->unique_id}})" data-modal-hide="edit-modal-{{$u->unique_id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



            <div id="delete-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Excluir Perfil
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="delete-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500">
                                Deseja realmente excluir o Perfil?
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button onclick="deleteMedicamento()" data-modal-hide="delete-modal" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>