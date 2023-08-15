<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesFormRequest;
use App\Models\Cliente;
use App\Models\Divida;
use App\Http\Requests;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
//    public function index(Request $request)
//    {
//        $clientes = Cliente::all();
//        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
//        //$request->session()->forget('mensagem.sucesso');
//
//        return view('app.clientes')->with('clientes',$clientes)->with('mensagemSucesso',$mensagemSucesso);
//    }

    public function index(){
        $clientes = Cliente::all();
        return view('app.cliente.index', ['clientes' => $clientes]);
    }

    public function create()
    {
       return view('app.cliente.create');
    }

    public function store(Request $request)
    {
//        $request->validate([
//           'nome'=>['required','min:3'],
//           'cpf'=>['required','max:11'],
//           'telefone'=>['required','max:11']
//        ]);
        // **** 1º OPÇÃO DE CAPTURAR INFORMAÇÕES **** //
        //-----------------------------------------------------------------
        // Captura os dados do formulário
        // $nomeCliente = $request->input('nome');
        // $cpf = $request->input('cpf');
        // $telefone = $request->input('telefone');
        //-----------------------------------------------------------------
        // Cria um novo registro do Cliente no banco
        // ----DB::insert('INSERT INTO clientes (nome, cpf, telefone) VALUES (?, ?, ?)', [$nomeCliente, $cpf, $telefone]);
        // ----return redirect('/clientes');-------
        //---------------------------------------------------------------------------------------------------------------
        // **** 2º OPÇÃO DE CAPTURAR INFORMAÇÕES **** //
        //-----------------------------------------------------------------
        // Captura os dados do formulário
        //-----------------------------------------------------------------
        // $nomeCliente = $request->input('nome');
        // $cpf = $request->input('cpf');
        // $telefone = $request->input('telefone');
        //-----------------------------------------------------------------
        // Cria um novo registro do Cliente usando o Eloquent
        //-----------------------------------------------------------------
        //$cliente = new Cliente();
        //$cliente->nome = $nomeCliente;
        //$cliente->cpf = $cpf;
        //$cliente->telefone = $telefone;
        //-----------------------------------------------------------------
        // Salva o novo cliente no banco de dados
        //$cliente->save();
        //-----------------------------------------------------------------
        // redireciona para a página dos clientes
        //return redirect('/clientes');
        // -------------------------------------------------------------------------------------------------------------
        // **** 3º OPÇÃO DE CAPTURAR INFORMAÇÕES **** //
        //-----------------------------------------------------------------
        // Captura os dados do formulário - sem utilizar o input
        // $nomeCliente = $request->nome;
        // $cpf = $request->cpf;
        // $telefone = $request->telefone;
        //-----------------------------------------------------------------
        // Cria um novo registro do Cliente usando o Eloquent
        //-----------------------------------------------------------------
        //$cliente = new Cliente();
        //$cliente->nome = $nomeCliente;
        //$cliente->cpf = $cpf;
        //$cliente->telefone = $telefone;
        //-----------------------------------------------------------------
        // Salva o novo cliente no banco de dados
        //$cliente->save();
        //-----------------------------------------------------------------
        // redireciona para a página dos clientes
        //return redirect('/clientes');
        //-----------------------------------------------------------------

        // **** 4º OPÇÃO DE CAPTURAR INFORMAÇÕES **** //

        $clientes = Cliente::create($request->all());

        //Criar as Dividas
//        $numDividas = count($request->input('data_do_debito'));
//        for ($i = 0; $i < $numDividas; $i++) {
//            $dividaData = [
//                'data_do_debito' => $request->input('data_do_debito')[$i],
//                'valor_da_divida' => $request->input('valor_da_divida')[$i],
//                'data_de_vencimento' => $request->input('data_de_vencimento')[$i],
//                'valor_do_acordo' => $request->input('valor_do_acordo')[$i],
//                'fornecedor' => $request->input('fornecedor')[$i],
//                'cliente_id' => $clientes->id, // Associar a dívida ao cliente criado
//            ];
//            $divida = new Divida($dividaData);
//            $clientes->dividas()->save($divida);
//        }

//            Explicação:
//              No formulário, mantivemos os campos de dívida como arrays,
//              permitindo a inserção de múltiplas dívidas.
//              No controller, utilizamos um loop for para
//              iterar sobre os campos de dívida e criar
//              as respectivas dívidas no banco de dados.
//              Criamos cada dívida usando a função
//              Divida::create() e passamos os valores
//              corretos para cada campo, além de associar
//              a dívida ao cliente recém-criado através
//              do atributo cliente_id.

        //$request->session()->flash('mensagem.sucesso', "Cliente '{$cliente->nome}'
        // cadastrado com sucesso");
        //-----------------------------------------------------------------
        //return redirect('/clientes');
        //return redirect(route('clientes.index'));
        //return redirect()->route('clientes.index');
        return to_route('app.cliente.index')
            ->with('mensagem.sucesso', "Cliente '{$clientes->nome}'cadastrado com sucesso");

    }

    // 1ºOPÇÃO PARA FAZER UMA FUNÇÃO DELETE
//    public function destroy (Request $request)
//    {
//        Cliente::destroy($request->cliente);
//        $request->session()->flash('mensagem.sucesso','Série removida com sucesso');
//
//        return to_route('clientes.index');
//    }
//------------------------------------------------------------------

// 2º OPÇÃO PARA FAZER A FUNÇÃO DELETE

    public function destroy (Cliente $cliente,Request $request)
    {
        $cliente->delete();
        // $request->session()->flash('mensagem.sucesso',"Série '{$cliente->nome}' removida com sucesso");

        return to_route('app.cliente.index')
            ->with('mensagem.sucesso',"Cliente '{$cliente->nome}' removida com sucesso");
    }

    // EDITAR

    public function edit(Cliente $cliente)
    {
        //return view('app.cliente.edit')->with('cliente', $cliente);
        return view('app.cliente.edit', compact('cliente'));
    }

//    public function update(Cliente $cliente, ClientesFormRequest $request)
//    {
////        $cliente->nome = $request->nome;
////        $cliente->cpf = $request->cpf;
////        $cliente->telefone = $request->telefone;
//        $cliente->fill($request->all());
//        $cliente->save();
//
//        return to_route('app.cliente.index')->with('mensagem.sucesso',"Cliente '{$cliente->nome}' atualizado com sucesso");
//    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());

        return redirect()->route('app.cliente.index')
            ->with('mensagem.sucesso', "Cliente '{$cliente->nome}' atualizado com sucesso");
    }

}
