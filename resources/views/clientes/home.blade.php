@extends('clientes.baselayout')

@section('content')
    <h1 class="text-center mx-3">Listagem de Clientes</h1>
    <table class="table-responsive-sm table mt-5 table-striped table-bordered table-hover">
        <thead class="text-center thead-dark ">
            <th scope="col">#</th>
            <th scope="col">Razão Social</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Tipo de Contato</th>
            <th scope="col">Descrição do Contato</th>
            <th scope="col">Ativo</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
                <tr class="text-center">
                    <td>{{ $cliente->idCliente }}</td>
                    <td>{{ $cliente->RazaoSocial }}</td>
                    <td>{{ date('d/m/Y', strtotime($cliente->DataCadastro)) }}</td>
                    <td>{{ $cliente->contato->TipoContato  }}</td>
                    <td>{{ $cliente->contato->DescContato  }}</td>
                    <td>{{ $cliente->BolAtivo  === 1 ? 'Sim' : 'Não' }}</td>
                    <td>
                        <a href="{{ route('cliente.show', $cliente->idCliente)}}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('cliente.delete', $cliente->idCliente)}}" onClick="return confirm('Tem certeza que deseja excluir este registro?')" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @empty
            <p class="text-center mt-5 lead">Lista Vazia :(</p>
            @endforelse
        </tbody>
    </table>
@stop
