@extends('clientes.baselayout')

@section('content')

<div class="row mt-5 justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center lead">
                Cadastrar novo Cliente
            </div>
            <div class="card-body">
                <form class="form" action="" method="post">
                    <div class="form-group">
                        <label for="razaoSocial">Razão Social</label>
                        <input id="razaoSocial" class="form-control" name="razaoSocial" type="text">
                    </div>
                    <div class="form-group">
                        <label for="selectTipo">Tipo de Contato</label>
                        <select data-js="selectTipo" name="" id="selectTipo" class="form-control">
                            <option value="" disabled>Escolha o tipo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descricaoContato">Descrição do Contato</label>
                        <textarea name="" id="descricaoContato" class="form-control" cols="10"></textarea>
                    </div>
                    <div class="form-group ">
                        <h2 class="lead ">Ativo</h2>
                            Sim: <input type="radio" name="ativo" class="form-group" value="1" id="">
                            Não: <input type="radio" name="ativo" class="form-group" value="0" id="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-3">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop
@section('extraJS')
    <script src="{{ asset('js/create.js') }}"></script>
@stop
