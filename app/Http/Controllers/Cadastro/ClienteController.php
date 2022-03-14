<?php

namespace App\Http\Controllers\Cadastro;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCliente;

class ClienteController extends Controller
{
    private $cliente;
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index()
    {
        $clientes = $this->cliente->latest()->paginate(3);

        return view(
            'pages.admin.cadastro.clientes.index',
            [
                'clientes' => $clientes,
            ]
        );
    }


    public function create()
    {
        return view('pages.admin.cadastro.clientes.create');
    }


    public function store(Request $request)
    {
        $this->cliente->create($request->all());

        return redirect()->route('clientes.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cliente = $this->cliente->find($id);
        // dd($cliente);

        if (!$cliente) {
            return redirect()->back();
        }

        return view('pages.admin.cadastro.clientes.edit', ['cliente' => $cliente] );
    }


    public function update(StoreUpdateCliente $request, $id)
    {
        $cliente = $this->cliente->find($id);

        if (!$cliente) {
            return redirect()->back();
        }

        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }


    public function destroy($id)
    {
        $cliente = $this->cliente->find($id);

        if (!$cliente)
            return redirect()->back();

        $cliente->delete();

        return redirect()->route('clientes.index');
    }

    public function search(Request $request)
    {
        // dd($request);

        $filters = $request->except('_token');

        $clientes = $this->cliente->search($request->filter);

        return view('pages.admin.cadastro.clientes.index', [
            'clientes' => $clientes,
            'filters' => $filters,
        ]);
    }

    public function busca_geral(Request $request)
    {
        // dd($request);

        $filters = $request->except('_token');

        // dd($filters);

        $clientes = $this->cliente->buscaGeral($filters);

        // dd($clientes);

        return view('pages.admin.cadastro.clientes.index', [
            'clientes' => $clientes,
            'filters' => $filters,
        ]);
    }
}
