@extends('clientes.baselayout')

@section('content')

<div class="row mt-5 justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center lead">
                {!! isset($cliente) ? "Detalhes cliente <b>$cliente->RazaoSocial</b>." : 'Cadastrar novo Cliente' !!}
            </div>
            <div class="card-body">
                @if(isset($cliente))
                    <form action="{{ route('cliente.update') }}" class="form" method="POST">
                    <input type="hidden" value="{{ $cliente->idCliente }}"name="cliente_id">
                    <input type="hidden" data-js="contato-cliente" value="{{ $cliente->contato->TipoContato }}">
                @else
                <form class="form" action="{{ route('cliente.create') }}" method="post">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="RazaoSocial">Razão Social</label>
                        <input id="RazaoSocial" class="form-control {{ $errors->has('RazaoSocial') ? 'is-invalid' : '' }}" value="{{ $cliente->RazaoSocial or old('RazaoSocial') }}" name="RazaoSocial" type="text">
                        @if($errors->has('RazaoSocial'))
                            <div class="invalid-feedback">
                                {{$errors->first('RazaoSocial') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="TipoContato">Tipo de Contato</label>
                        <select data-js="selectTipo" name="TipoContato" id="TipoContato" class="form-control {{ $errors->has('TipoContrato') ? 'is-invalid' : '' }}">
                            <option value="" disabled>Escolha o tipo</option>
                        </select>
                        @if($errors->has('TipoContato'))
                            <div class="invalid-feedback">
                                {{$errors->first('TipoContato') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="descContato">Descrição do Contato</label>
                        <textarea name="DescContato" id="descContato" class="form-control {{ $errors->has('DescContato') ? 'is-invalid' : ''}}" cols="10">{{ $cliente->contato->DescContato or old('DescContato') }}</textarea>
                        @if($errors->has('DescContato'))
                            <div class="invalid-feedback">
                                {{$errors->first('DescContato') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group ">
                        <h2 class="lead ">Ativo</h2>
                            Sim: <input type="radio" name="BolAtivo" class="form-group" value="1" checked=" {{ isset($cliente) && $cliente->BolAtivo === 1 ? 'checked' : '' }}">
                            Não: <input type="radio" name="BolAtivo" class="form-group" value="0" checked=" {{ isset($cliente) && $cliente->BolAtivo === 0 ? 'checked' : '' }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-3">{{ isset($cliente) ? 'Atualizar Cliente' : 'Adicionar Cliente' }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop
@section('extraJS')
    <script src="{{ asset('js/create.js') }}"></script>
@stop
