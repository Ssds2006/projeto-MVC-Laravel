<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index(){
        return view('app.fornecedor');
    }

    public function listar(Request $request){

        $fornecedores = Fornecedor::where('nome','like','%'.$request->input('nome').'%')
            ->where('uf','like','%'.$request->input('uf').'%')
            ->where('email','like','%'.$request->input('email').'%')
            ->get();
        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores ]);
    }

    public function adicionar(Request $request){

        $msg = '';

        //verifica se o token está vazio
        if ($request->input('_token') != ''){
            //validação
            $regras = [
                'nome' => 'required|min:3|max:40',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'O campo deve ter no minimo 3 caracteres',
                'nome.max' => 'O campo deve ter no máximo 40 caracteres',
                'uf.min' => 'O campo deve ter no minimo 2 caracteres',
                'uf.max' => 'O campo deve ter no máximo 2 caracteres',
                'email.email' => ' O campo e-mail não foi preenchido coretamente'
            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            // dados para view
            $msg = 'Cadastro realizado com sucesso';

        }

        return view('app.fornecedor.adicionar', ['msg'=>$msg]);
    }
}
