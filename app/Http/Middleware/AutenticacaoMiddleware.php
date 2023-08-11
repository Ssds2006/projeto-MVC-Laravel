<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao, $perfil,$param3,$param4)
    {
//        //verifica se o usuario possui acesso a rota
//        echo $metodo_autenticacao.'-'.$perfil.'<br>';
//
//        if($metodo_autenticacao === 'padrao'){
//            echo ' Verificar o usuário e senha no banco de dados'.$perfil.'<br>';
//        }
//
//        if ($metodo_autenticacao == 'ldap'){
//            echo 'Verificar o usuario e senha no AD'.$perfil.'<br>';
//        }
//
//        if ($perfil == 'vistante'){
//            echo 'Exibir apenas alguns recursos'.'<br>';
//        }else{
//            echo 'carregar perfil do banco de dados'.'<br>';
//        }
//
//        if (false){
//            return $next($request);
//        }else {
//            return Response('Acesso negado! Rota exige autenticação!!!');
//        }
//
//        //return $next($request);
//        //return Response('Acesso negado! Rota exige autenticação!!!');

        session_start();

        if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
            return $next($request);
        }else{
            return redirect()->route('site.login',['erro' => 2]);
        }

    }
}
