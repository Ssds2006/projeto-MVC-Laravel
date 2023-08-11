<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\LogAcesso;
use App\Http\Controllers\ClientesController;


class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //return $next($request);
      //LogAcesso::create(['log'=>'']);
       // return Response('chegamos');
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log'=>"IP $ip requisitou a rota $rota"]);

        //return $next($request);

        //return Response('chegamos');

        $resposta = $next($request);

        $resposta->setStatusCode(201,'O status da resposta e o texto da resposta foram modificados');

        return $resposta;
    }
}
