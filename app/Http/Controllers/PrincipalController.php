<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(Request $request) {

        $motivo_contatos = [
            '1' => 'Dúvida',
            '1' => 'Elogio',
            '1' => 'Reclamação',
        ];

        return view('site.principal',['motivo_contatos'=> $motivo_contatos]);
    }
}
