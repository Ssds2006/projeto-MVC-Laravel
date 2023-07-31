<x-layout title="Dívidas do Cliente {!! $cliente->nome !!}">
    <table class="table">
        <thead>
        <tr>
            <th>Quat</th>
            <th>Data do Débito</th>
            <th>Valor da Dívida</th>
            <th>Data de Vencimento</th>
            <th>Valor do Acordo</th>
            <th>Fornecedor</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dividas as $divida)
            <tr>
                <td>{{ $divida->quat }}</td>
                <td>{{ $divida->data_do_debito }}</td>
                <td>R$ {{ $divida->valor_da_divida }}</td>
                <td>{{ $divida->data_de_vencimento }}</td>
                <td>R$ {{ $divida->valor_do_acordo }}</td>
                <td>{{ $divida->fornecedor }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>

