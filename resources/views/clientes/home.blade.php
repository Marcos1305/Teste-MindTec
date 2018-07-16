@extends('clientes.baselayout')

@section('content')
    <h1 class="text-center mx-3">Listagem de Clientes</h1>
    <table class="table mt-5 table-striped table-bordered table-hover">
        <thead class="text-center thead-dark ">
            <th scope="col">#</th>
            <th scope="col">Razão Social</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Ativo</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
                <tr class="text-center">
                    <td>{{ $cliente->idCliente }}</td>
                    <td>{{ $cliente->RazaoSocial }}</td>
                    <td>{{ date('d/m/Y', strtotime($cliente->DataCadastro)) }}</td>
                    <td>{{ $cliente->BolAtivo  === 1 ? 'Sim' : 'Não' }}</td>
                    <td>
                        <a href="" class="btn btn-warning">Editar</a>
                        <a href="" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @empty
            <p class="text-center mt-5 lead">Lista Vazia :(</p>
            @endforelse
        </tbody>
    </table>
@stop
