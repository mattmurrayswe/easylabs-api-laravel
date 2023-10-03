@include('components.header')

<body>
    <div class="flex">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 ml-[20%] p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <a class="flex" href="">
                        <div class="w-7 mr-3 flex justify-center">
                            <img src="{{URL::asset('/image/message.svg')}}" alt="profile Pic" height="20" width="20">
                        </div>
                        <p>Mensagens</p>
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
            <div id="tabela-medicamentos" class="h-5/6 mb-20 content-center">
                <div class="mb-2">
                    <form action="{{ url('/mensagens') }}" method="GET">
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
                                <p class="flex text-white">Nome Usuário</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Nome Permissão</p>
                            </th>
                            <th class="px-4">
                                <p class="flex text-white">Última Mensagem</p>
                            </th>
                            <th class="rounded-tr-xl px-4">
                                <p class="flex justify-end text-white">Visualizar Conversa/Responder</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="my-20 bg-white rounded-xl">
                        @foreach ($messages as $m)
                        <tr class="h-10 bg-gray-50">
                            <td hidden id="id-usuario" class="px-4">{{$m->id}}</td>
                            <td id="name" class="px-4">{{$m->name}}</td>
                            <td id="permissao" class="px-4">{{$m->entity}}</td>
                            <td id="id-permissao" class="px-4">{{$m->message}}</td>
                            <td data-modal-target="chat-modal-{{$m->chat_id}}" data-modal-toggle="chat-modal-{{$m->chat_id}}" class="px-4 underline decoration-blue-400 decoration-2 cursor-pointer hover:text-blue-600">
                                <p class="flex justify-end cursor-pointer hover:text-blue-600">Editar</p>
                            </td>
                        </tr>
                        @endforeach
                        <tr class="bg-gray-800 max-h-5 h-5">
                            <td class="px-4 rounded-bl-xl"></td>
                            <td class="px-4" colspan="2">
                                <div class="flex justify-center items-center h-full">
                                </div>
                            </td>
                            <td class="rounded-br-xl text-end"></td>
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

            @foreach($messages as $m)
            <div data-modal-backdrop="static" id="chat-modal-{{$m->chat_id}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Chat
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="chat-modal-{{$m->chat_id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Fechar</span>
                            </button>
                        </div>
                        <!-- Modal body -->

                        <div class="p-6 space-y-6">
                            @foreach($m->chat as $chatMessage)
                            <div class="flex justify-{{$chatMessage->admin_replying ? 'start' : 'end'}} mt-2">
                                <div class="bg-{{$chatMessage->admin_replying ? 'blue-500' : 'blue-800'}} text-white rounded-lg p-2 max-w-xs w-full">
                                    <p>{{$chatMessage->message}}</p>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <input type="text" id="mensagem-{{$m->chat_id}}" class="w-full px-3 py-2 border rounded-lg" placeholder="Digite sua mensagem">
                            <button
                            onclick="enviarMensagem(`{{ $m->entity_original }}`, @php echo ($m->entity_original === 'prescriber') ? $m->prescriber_id : $m->patient_id; @endphp, `{{ $m->name }}`, `{{ $m->chat_id }}`)"
                            type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        >
                                Enviar
                            </button>
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