<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ViewsAdminController extends Controller
{
    public function cadastroSintomas()
    {
        return view('cadastro-sintomas', [
            'sintomas' => [
                0 => "Febre",
                1 => "Náusea",
                2 => "Refluxo",
                3 => "Tosse",
                4 => "Secreção Nasal",
                5 => "Tremores"
            ]
        ]);
    }
}
