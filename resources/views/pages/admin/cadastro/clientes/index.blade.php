@extends('layouts.cabecalho')

@section('content')
    <div class="mt-5">
        <h1>Clientes <a href="{{ route('clientes.create') }}" class="btn btn-dark">Novo Cliente</a></h1>

        <div class="card card-header">
            <form action="{{ route('clientes.search') }}" method="POST" class="row">
                @csrf
                <div class="col-6">
                    <input type="text" class="form-control" id="filter" name="filter" placeholder="Busca" value="{{ $filters['filter'] ?? '' }}">
                </div>
                <div class="col-auto">
                    <button type="submit" class="col-auto btn btn-dark">Filtrar</button>
                </div>
            </form>
        </div>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>CEP</th>
                    <th>Alterar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nome }} </td>
                        <td>{{ $cliente->endereco }} </td>
                        <td>{{ $cliente->bairro }} </td>
                        <td>{{ $cliente->cidade }} </td>
                        <td>{{ $cliente->uf }} </td>
                        <td>{{ $cliente->CEP }} </td>
                        <td style="width=10px;">
                            <a href="{{ route('clientes.edit', $cliente->id) }}" title="Editar Registro"><i
                                    class="bi bi-pencil"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $clientes->links() }}
    </div>
@endsection
