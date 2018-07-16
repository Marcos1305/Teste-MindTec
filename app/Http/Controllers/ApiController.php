<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function tiposContatos()
    {
        $contatos = ['Celular', 'Telefone', 'E-mail', 'Redes Sociais', 'Ramal'];
        return response()->json($contatos, 200);
    }
}
