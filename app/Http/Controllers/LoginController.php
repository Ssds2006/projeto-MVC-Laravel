<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login (){
        return view('site.login');
    }

    public function autenticar(Request $request){
        // regras de validação
        $regras = [
            'usuario'=>'email',
            'senha'=>'required'
        ];

        //as mensagens de feedback de validação
        $feedback = [
          'usuario.email'=> ' o campo usuário(e-mail) é obrigatório',
            'senha.required'=> ' o campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        // iniciar o Model User
//        $user = new User();
//
//        $usuario = $user->where('email', $email)
//                    ->where('password', $password)
//                    ->get()->first();
//
//        if (isset($usuario->name)){
//            echo 'Usuário existe';
//        }else {
//            echo 'Usuário não existe';
//        }
//
//        // Verifica se o usuário existe e se a senha está correta
//        if ($user && password_verify($request->input('password'), $user->password)) {
//            // A senha está correta, faça o login do usuário
//            // ...
//        } else {
//            // A senha está incorreta ou o usuário não existe
//            // Retorne uma mensagem de erro de login inválido
//            // ...
//        }

// Obter o usuário com base no e-mail fornecido
        $user = User::where('email', $email)->first();

        // Verificar se o usuário existe
        if ($user) {
            // Verificar se a senha está correta (código inseguro!)
            if ($user->password === $password) {
                // Autenticação bem-sucedida
                // Você pode fazer o login do usuário aqui, se necessário

                // Exemplo de login manual (opcional):
                Auth::login($user);

                echo 'Usuário existe e a senha está correta.';
            } else {
                // Senha incorreta
                echo 'Senha incorreta.';
            }
        } else {
            // Usuário não existe
            echo 'Usuário não existe.';
        }
    }
}
