<div id="side-navbar" class="min-h-screen bg-gray-200 w-1/5 shadow-2xl py-2">
    <div id="logo-brease" class="p-3 text-white flex justify-center py-16">
        <img src="{{URL::asset('/image/logo.svg')}}" alt="profile Pic" height="120" width="120">
    </div>
    <div id="cadastro-medicamentos" class=" p-3 pt-12 text-gray-900 mx-4">
        <a class="flex" href="{{ url('/cadastro-medicamentos') }}">
            <div class="w-5 mr-3 flex justify-center">
                <img src="{{URL::asset('/image/med-icon.svg')}}" alt="profile Pic" height="15" width="15">
            </div>
            <p>Cadastro de Medicamentos</p>
        </a>
    </div>
    <div id="cadastro-sintomas" class="p-3 text-gray-900 mx-4">
        <a class="flex" href="{{ url('/cadastro-sintomas') }}">
            <div class="w-5 mr-3 flex justify-center">
                <img src="{{URL::asset('/image/sym-icon.svg')}}" alt="profile Pic" height="18" width="18">
            </div>
            <p>Cadastro de Sintomas</p>
        </a>
    </div>
    <div id="cadastro-sintomas" class="p-3 text-gray-900 mx-4">
        <a class="flex" href="{{ url('/cadastro-diagnosticos') }}">
            <div class="w-5 mr-3 flex justify-center">
                <img src="{{URL::asset('/image/diag-icon.svg')}}" alt="profile Pic" height="15" width="15">
            </div>
            <p>Cadastro de Diagnósticos</p>
        </a>
    </div>
    <div id="docs" class="p-3 text-gray-900 mx-4">
        <a class="flex" href="{{ url('/validacao-documentos') }}">
            <div class="w-5 mr-3 flex justify-center">
                <img src="{{URL::asset('/image/doc-icon.svg')}}" alt="profile Pic" height="15" width="15">
            </div>
            <p>Validação de Documentos</p>
        </a>
    </div>
    <div id="config-pushs" class="p-3 text-gray-900 mx-4">
        <a class="flex" href="{{ url('/config-pushs') }}">
            <div class="w-5 mr-3 flex justify-center">
                <img src="{{URL::asset('/image/set-icon.svg')}}" alt="profile Pic" height="18" width="18">
            </div>
            <p>Push Notifications</p>
        </a>
    </div>
</div>