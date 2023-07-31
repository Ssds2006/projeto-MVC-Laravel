<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DividasController extends BaseController
{
//   public function index(Clientes $cliente)
//   {
//        $dividas = $cliente->dividas;
//
//        return view('dividas.index')->with('dividas',$dividas);
//   }

    public function index(Cliente $cliente) // Corrija o nome do parâmetro para Cliente
    {
        $dividas = $cliente->dividas;

        return view('dividas.index')->with('dividas', $dividas)->with('cliente', $cliente);
    }
}
