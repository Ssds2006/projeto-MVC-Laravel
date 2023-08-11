<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Divida;
use App\Models\Fornecedor;
//use http\Env\Request;
use Illuminate\Http\Request;
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

//    public function index(Cliente $cliente) // Corrija o nome do parâmetro para Cliente
//    {
//        $dividas = $cliente->dividas;
//
//        return view('dividas.index')->with('dividas', $dividas)->with('cliente', $cliente);
//    }

    public function index(Request $request) {
        $dividas = Divida::where('cliente_id', 'like', '%'.$request->input('cliente_id').'%')
            ->where('fornecedor_id', 'like', '%'.$request->input('fornecedor_id').'%')
            ->where('data_do_debito', 'like', '%'.$request->input('data_do_debito').'%')
            ->where('valor_da_divida', 'like', '%'.$request->input('valor_da_divida').'%')
            ->where('data_de_vencimento', 'like', '%'.$request->input('data_de_vencimento').'%')
            ->where('valor_do_acordo', 'like', '%'.$request->input('valor_do_acordo').'%')
            ->whereNull('deleted_at')
            ->get();

        return view('app.divida.index', ['dividas' => $dividas, 'request' => $request->all()]);
    }

    public function create(){

        $cod_fornecedor = Fornecedor::all();
        $statusOptions = ['pendente', 'em_negociacao', 'quitado'];

        return view('app.divida.create',['fornecedores'=> $cod_fornecedor, 'statusOptions' => $statusOptions]);
    }

//    public function store(Request $request){
//        Divida::create($request->all());
//
//        redirect()->route('app.divida.index');
//    }

    public function store(Request $request)
    {
        // Valide os dados do formulário

//        $request->validate([
//            'cliente_id' => 'required|integer|exists:clientes,id',
//            'fornecedor_id' => 'required|integer|exists:fornecedores,id',
//            'data_do_debito' => 'required|date',
//            'valor_da_divida' => 'required|numeric',
//            'data_de_vencimento' => 'date',
//            'valor_do_acordo' => 'numeric',
//            'status' => 'required|in:pendente,em_negociacao,quitado',
//        ]);

        $regras = [
            'cliente_id' => 'required|integer|exists:clientes,id',
            'fornecedor_id' => 'required|integer|exists:fornecedores,id',
            'data_do_debito' => 'required|date',
            'valor_da_divida' => 'required|numeric',
            'data_de_vencimento' => 'required|date',
            'valor_do_acordo' => 'required|numeric',
            'status' => 'required|in:pendente,em_negociacao,quitado'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'cliente_id.exists' => 'O cliente não existe',
            'fornecedor_id.exists' => 'O fornecedor não existe'
        ];

        // Crie uma nova instância da Divida com base nos dados do formulário
        Divida::create($request->all());
//        $divida = new Divida([
//            'cliente_id' => $request->input('cliente_id'),
//            'fornecedor_id' => $request->input('fornecedor_id'),
//            'data_do_debito' => $request->input('data_do_debito'),
//            'valor_da_divida' => $request->input('valor_da_divida'),
//            'data_de_vencimento' => $request->input('data_de_vencimento'),
//            'valor_do_acordo' => $request->input('valor_do_acordo'),
//            'status' => $request->input('status'),
//        ]);

        // Salve a nova instância da Divida no banco de dados

        //$divida->save();
        $request->validate($regras, $feedback);

        // Redirecione para a página de index de dividas com uma mensagem de sucesso
        return redirect()->route('app.divida.index')->with('mensagem.sucesso', 'Divida cadastrada com sucesso.');
    }

    public function show(Divida $divida){

        //dd($divida);
        return view('app.divida.show', ['divida' => $divida]);
    }

    public function edit (Divida $divida){

        $cod_fornecedor = Fornecedor::all();
        $statusOptions = ['pendente', 'em_negociacao', 'quitado'];

        return view('app.divida.edit', ['divida' => $divida, 'fornecedores'=> $cod_fornecedor, 'statusOptions' => $statusOptions]);
//
//        $fornecedores = Fornecedor::all();
//        $statusOptions = ['pendente', 'em_negociacao', 'quitado'];
//
//        return view('app.divida.edit', compact('divida', 'fornecedores', 'statusOptions'));
    }

    public function update(Request $request, Divida $divida){
        $divida->update($request->all());

        return redirect()->route('app.divida.show', ['divida' => $divida->id]);
    }

    public function destroy (Divida $divida){
        $divida->delete();

        return redirect()->route('app.divida.index');
    }
}
