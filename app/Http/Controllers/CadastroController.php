<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CadastroController extends Controller
{
    public function exibirFormulario()
    {
        return view('site.cadastro');
    }

    public function cadastrar(Request $request)
    {
        // Validação dos campos do formulário (opcional)
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        // Criar o usuário no banco de dados
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password'); // Não utilizar bcrypt para desativar a criptografia

        $user->save();

        // Redirecionar para uma página de sucesso
        return redirect()->route('site.cadastro.sucesso');
    }

    public function cadastroSucesso()
    {
        return view('site.cadastro_sucesso');
    }
}
