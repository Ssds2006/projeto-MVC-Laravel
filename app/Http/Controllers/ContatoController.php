<?php

namespace App\Http\Controllers;

use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
  public function contato(Request $request){

//      $contato = new SiteContato();
//      //MODO REQUEST FILL PARA PEGAR OS DADOS DO FORMULÁRIO
//      $contato->fill($request->all());
//
//      //MODO PADRÃO PARA PEGAR OS DADOS DO FORMULÁRIO
////      $contato->nome = $request->input('nome');
////      $contato->telefone = $request->input('telefone');
////      $contato->email = $request->input('email');
////      $contato->motivo_contato = $request->input('motivo');
////      $contato->mensagem = $request->input('mensagem');
//
//      //grava os dados no banco- save()
//      $contato->save();

      $motivo_contatos = [
          '1' => 'Dúvida',
          '2' => 'Elogio',
          '3' => 'Reclamação',
      ];
      return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
  }

  public function salvar(Request $request){
      //realizar as validações dos dados do formulário recebidos no request

     $regras = [
         'nome'=>'required|min:3|max:40',
         'telefone'=>'required',
         'email'=>'email',
         'motivo_contato'=>'required',
         'mensagem'=>'required|max:2000'

      ];

      $feedback = [
          'nome.min'=> 'O campo nome precisa ter no mínimo 3 caracteres',
          'nome.max'=> 'O campo nome deve ter no máximo 40 caracteres',

          'email.email'=>'O email informado não é válido',

          'mensagem.max'=>'A mensagem deve ter no máximo 2000 caracteres',

          // :attribute : cria uma mensagem generica para todos os campos
          'required'=>'o campo :attribute deve ser preenchido'
          ];

       $request->validate($regras, $feedback);
      //sem instanciar um objeto
      SiteContato::create($request->all());
      return redirect()->route('site.index');
  }
}
