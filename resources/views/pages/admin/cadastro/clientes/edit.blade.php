@extends('layouts.cabecalho')

@section('content')
    <div>
        <h1>Alteração de Cliente : {{ $cliente->nome }}</h1>
        <hr>
        <form action="{{ route('clientes.update', $cliente->id) }}" class="form" method="post">
            @method('PUT')


            @include('pages.admin.cadastro.clientes._partials.form')

            @include('pages.includes.alerts')
        </form>

            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-lg"><i class="fas fa-trash"></i> DELETAR O CLIENTE : {{ $cliente->nome }}</button>
            </form>


    </div>
@endsection
