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
    <div class="container flex min-h-screen min-w-full">
        <div id="side-navbar" class="min-h-screen bg-gray-900 w-1/5 shadow-2xl py-2">
            <div id="logo-brease" class="p-3 text-white flex justify-center py-16">
                <img src="{{URL::asset('/image/logo.svg')}}" alt="profile Pic" height="100" width="100">
            </div>
            <div id="cadastro-medicamentos" class="p-3 text-white">Cadastro de Medicamentos</div>
            <div id="cadastro-sintomas" class="p-3 text-white">Cadastro de Sintomas</div>
            <div id="docs" class="p-3 text-white">Validação de Documentos</div>
            <div id="config-pushs" class="p-3 text-white">Push Notifications</div>
        </div>
        <div id="container-content" class="min-h-screen bg-white w-4/5">
            <div id="titulo-pagina" class="p-20 text-gray-900 text-xl underline">Cadastro de Sintomas</div>
        </div>
    </div>
</body>
</html>