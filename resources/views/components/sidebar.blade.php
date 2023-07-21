<div id="side-navbar" class="min-h-screen bg-gray-200 w-1/5 shadow-2xl py-2">
  <div id="logo-brease" class="p-3 text-white flex justify-center py-16">
    <img src="{{URL::asset('/image/logo.svg')}}" alt="profile Pic" height="120" width="120">
  </div>
  <div id="cadastro-medicamentos" class=" p-3 pt-12 text-gray-900 mx-4 text-blue-500 hover:text-blue-800">
    <a class="flex" href="{{ url('/cadastro-medicamentos') }}">
      <div class="w-5 mr-3 flex justify-center">
        <img src="{{URL::asset('/image/med-icon.svg')}}" alt="profile Pic" height="15" width="15">
      </div>
      <p>Cadastro de Medicamentos</p>
    </a>
  </div>
  <div id="cadastro-sintomas" class="p-3 text-gray-900 mx-4 text-blue-500 hover:text-blue-800">
    <a class="flex" href="{{ url('/cadastro-sintomas') }}">
      <div class="w-5 mr-3 flex justify-center">
        <img src="{{URL::asset('/image/sym-icon.svg')}}" alt="profile Pic" height="18" width="18">
      </div>
      <p>Cadastro de Sintomas</p>
    </a>
   </div>
  <div id="cadastro-sintomas" class="p-3 text-gray-900 mx-4 text-blue-500 hover:text-blue-800 focus:text-red">
    <a class="flex" href="{{ url('/cadastro-diagnosticos') }}">
      <div class="w-5 mr-3 flex justify-center">
        <img src="{{URL::asset('/image/diag-icon.svg')}}" alt="profile Pic" height="15" width="15">
      </div>
      <p>Cadastro de Diagnósticos</p>
    </a>
  </div>
  <div id="docs" class="p-3 text-gray-900  mx-4 text-blue-500 hover:text-blue-800">
    <a class="flex" href="{{ url('/validacao-documentos') }}">
      <div class="w-5 mr-3 flex justify-center">
        <img src="{{URL::asset('/image/doc-icon.svg')}}" alt="profile Pic" height="15" width="15">
      </div>
      <p>Validação de Documentos</p>
    </a>
  </div>
  <div id="config-pushs" class="p-3 text-gray-900 mx-4 text-blue-500 hover:text-blue-800">
    <a class="flex" href="{{ url('/farmacias-parceiras') }}">
      <div class="w-5 mr-3 flex justify-center">
        <img src="{{URL::asset('/image/farmacias-parceiras.svg')}}" alt="profile Pic" height="18" width="18">
      </div>
      <p>Farmácias Parceiras</p>
    </a>
</div>
<div id="config-pushs" class="p-3 text-gray-900 mx-4 text-blue-500 hover:text-blue-800">
    <a class="flex" href="{{ url('/usuarios') }}">
      <div class="w-5 mr-3 flex justify-center">
        <img src="{{URL::asset('/image/users-group.svg')}}" alt="profile Pic" height="18" width="18">
      </div>
      <p>Usuários</p>
      </a>
</div>
<div id="config-pushs" class="p-3 text-gray-900 mx-4 text-blue-500 hover:text-blue-800">
    <a class="flex" href="{{ url('/perfilusuarios') }}">
      <div class="w-5 mr-3 flex justify-center">
        <img src="{{URL::asset('/image/perfuser.svg')}}" alt="profile Pic" height="18" width="18">
      </div>
      <p>Perfil Usuários</p>
      </a>
</div>
<div id="config-pushs" class="p-3 text-gray-900 mx-4 text-blue-500 hover:text-blue-800">
    <a class="flex" href="{{ url('/niveldepermicao') }}">
      <div class="w-5 mr-3 flex justify-center">
        <img src="{{URL::asset('/image/apps.svg')}}" alt="profile Pic" height="18" width="18">
      </div>
      <p>Nivel de Permissões</p>
      </a>
</div>
<div id="config-pushs" class="p-3 text-gray-900 mx-4 text-blue-500 hover:text-blue-800">
    <a class="flex" href="{{ url('/desconto-promocao') }}">
      <div class="w-5 mr-3 flex justify-center">
        <img src="{{URL::asset('/image/tags.svg')}}" alt="profile Pic" height="18" width="18">
      </div>
      <p>Desconto e Promoções</p>
      </a>
      </div>
<div id="config-pushs" class="p-3 text-gray-900 mx-4 text-blue-500 hover:text-blue-800">
    <a class="flex" href="{{ url('/extracaodados') }}">
      <div class="w-5 mr-3 flex justify-center">
        <img src="{{URL::asset('/image/dadosbar.svg')}}" alt="profile Pic" height="18" width="18">
      </div>
      <p>Extração de dados</p>
      </a>
      </div>
</div>