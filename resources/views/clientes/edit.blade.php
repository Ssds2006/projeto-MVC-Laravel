<x-layout title="Editar Cliente  '{!! $cliente->nome !!}  ' "  >
{{--    colocando {!! variavel que deseja !!} retira qualquer sintase do html da variavel que foi chamada--}}
{{--<x-layout title="Editar Cliente  '{{ $cliente->nome }}' "  >--}}
    <x-clientes.form :action="route('clientes.update', $cliente->id)" :nome="$cliente->nome" :cpf="$cliente->cpf" :telefone="$cliente->telefone" :update="true" />
</x-layout>
