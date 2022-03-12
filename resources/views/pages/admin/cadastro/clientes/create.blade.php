@extends('layouts.cabecalho')

@section('content')
    <div>
        <h1>Cadastro de Cliente - Novo Registro</h1>
        <hr>
        <form action="{{ route('clientes.store') }}" method="post">

            @include('pages.admin.cadastro.clientes._partials.form')


        </form>

    </div>
@endsection
