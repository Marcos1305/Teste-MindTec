<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MindTec</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a href="{{ route('cliente.index') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('cliente.create') }}" class="nav-link">Cadastrar novo cliente</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-3">
        <div class="text-center">
            @include('clientes.alerts')
        </div>
        @yield('content')
    </div>

<script src="{{ asset( 'js/app.js') }}"></script>
@yield('extraJS')
</body>
</html>
