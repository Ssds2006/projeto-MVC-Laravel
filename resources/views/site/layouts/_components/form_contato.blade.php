{{ $slot }}

<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="borda-preta">
    @if($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="borda-preta">
    @if($errors->has('telefone'))
        {{ $errors->first('telefone') }}
    @endif
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="borda-preta">
    @if($errors->has('email'))
        {{ $errors->first('email') }}
    @endif
    <select name="motivo_contato"  class="borda-preta">
        <option value="">Qual o motivo do contato?</option>

        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{$key}}" {{ old('motivo_contato') == $key ? 'selected': '' }}>{{$motivo_contato}}</option>
        @endforeach
        <option value="1" {{ old('motivo_contato') == 1 ? 'selected' : '' }}>Dúvida</option>
        <option value="2" {{ old('motivo_contato') == 2 ? 'selected' : '' }}>Elogio</option>
        <option value="3" {{ old('motivo_contato') == 3 ? 'selected' : '' }}>Reclamação</option>
    </select>
    {{ $errors->has('motivo_contato') ? $errors->first('motivo_contato') : '' }}
    <textarea name="mensagem" class="borda-preta">{{(old('mensagem')!='') ? old('mensagem'):'Preencha aqui a sua mensagem'}} </textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
