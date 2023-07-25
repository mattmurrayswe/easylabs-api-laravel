@include('components.header')

<body>
    <div class="flex">

        @include('components.sidebar')

        <div id="container-content" class="bg-white w-4/5 ml-[20%] p-20 h-screen">
            <div class="header flex justify-between content-center">
                <div id="titulo-pagina" class="text-gray-900 text-xl font-medium underline">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Log Out') }}
                        </button>
                    </form>
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
<div id="tabela-medicamentos" class="h-5/6 my-20 rounded-xl shadow">
    <div id="main" class="m-8 grid grid-cols-3 gap-1 justify-evenly">
        <div class="flex justify-center items-center text-white bg-gray-800 col-span-3 rounded-lg h-12">
            Usuários
        </div>
        <div class="flex flex-col items-center justify-center text-black bg-gray-300 rounded-lg h-20">
            Admin Master
            <span class="centered-number"> - </span>
        </div>
        <div class="flex flex-col items-center justify-center text-black bg-gray-300 rounded-lg h-20">
            Admin
            <span class="centered-number">{{$admins}}</span>
        </div>
        <div class="flex flex-col items-center justify-center text-black bg-gray-300 rounded-lg h-20">
            Captador
            <span class="centered-number"> - </span>
        </div>
        <div class="flex flex-col items-center justify-center text-black bg-gray-300 rounded-lg h-20">
            Prescritor
            <span class="centered-number">{{$prescribers}}</span>
        </div>
        <div class="flex flex-col items-center justify-center text-black bg-gray-300 rounded-lg h-20">
            Paciente
            <span class="centered-number">{{$patients}}</span>
        </div>
        <div class="flex flex-col items-center justify-center text-black bg-gray-300 rounded-lg h-20">
            Total
            <span class="centered-number">{{$total}}</span>
        </div>
    </div>
    <title>Dados</title>
    <div id="main" class="m-8 grid grid-cols-2 gap-1 justify-evenly">
        <div class="flex flex-col items-center justify-center text-black bg-gray-300 rounded-lg h-20">
            Medicamentos
            <span class="centered-number">{{$medicines}}</span>
        </div>
        <div class="flex flex-col items-center justify-center text-black bg-gray-300 rounded-lg h-20">
            Diagnósticos
            <span class="centered-number">{{$diagnoses}}</span>
        </div>
        <div class="flex flex-col items-center justify-center text-black bg-gray-300 rounded-lg h-20">
            Vouchers Criados
            <span class="centered-number">-</span>
        </div>
        <div class="flex flex-col items-center justify-center text-black bg-gray-300 rounded-lg h-20">
            Campanhas Enviadas
            <span class="centered-number">-</span>
        </div>
    </div>
</div>

<div id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Novo Diagnóstico
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="add-modal">
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
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Selecione a data de inicio">
                </div>
                <span class="mx-4 text-gray-500">to</span>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Selecione a data final">
                </div>
                <!-- Modal footer -->
                <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <button onclick="cadastreDiagnostico()" data-modal-hide="edit-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Filtrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>