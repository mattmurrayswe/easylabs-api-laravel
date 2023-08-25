<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script src="{{URL::asset('/js/cadastro-sintomas.js')}}"></script>
    <script src="{{URL::asset('/js/cadastro-medicamentos.js')}}"></script>
    <script src="{{URL::asset('/js/cadastro-diagnosticos.js')}}"></script>
    <script src="{{URL::asset('/js/farmacias-parceiras.js')}}"></script>
    <script src="{{URL::asset('/js/validacao-documentos.js')}}"></script>
    <script src="{{URL::asset('/js/listar-usuarios.js')}}"></script>
    <script src="{{URL::asset('/js/permissoes.js')}}"></script>

    <title>Brease - Painel do Administrador</title>

    <!-- Fonts -->
    <link rel="icon" href="{{URL::asset('/image/mais-alivio.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <div id="endpoint-js" data-value="{{ env('ENDPOINT_JS') }}"></div>
    <script>
        const ENDPOINT_JS = document.getElementById('endpoint-js').dataset.value
    </script>
    <style>
        /* Add this style in your HTML or in a separate CSS file */
        .scrollbar-none-custom {
            scrollbar-width: thin;
            scrollbar-color: #a0aec0 #edf2f7;
        }

        .scrollbar-none-custom::-webkit-scrollbar {
            width: 0px;
        }

        .scrollbar-none-custom::-webkit-scrollbar-thumb {
            background-color: #a0aec0;
            border-radius: 4px;
        }

        .scrollbar-none-custom::-webkit-scrollbar-track {
            background-color: #edf2f7;
            border-radius: 4px;
        }
    </style>
</head>