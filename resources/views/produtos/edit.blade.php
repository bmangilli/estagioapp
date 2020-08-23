<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar produto</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/boxes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/page-produtos.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">

</head>
<body id="page-produtos">
    <div id="container">
        <header class="page-header">
            <div class="top-bar-container">
                <a href="/central/produtos">
                    <img src="/images/icons/back.png" alt="Voltar">
                </a>
            </div>
            <div class="header-content">
                <strong>Editar produto</strong>
                <form id="search-codigo" action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="POST">
                    @csrf
                    <div class="select-block">
                        <label for="">Código</label> <br />
                        <input type="text" name="codigo" value="{{ $produto->codigo}}"> <br />
                        <label for="" style="color: black;">Descrição</label> <br />
                        <input type="text" name="descricao" value="{{ $produto->descricao}}"> <br />
                        <label for="" style="color: black;">Custo</label> <br />
                        <input type="text" name="custo" value="{{ $produto->custo}}"> <br />
                        <button><img src="/images/icons/save.png" alt="Salvar alterações">Salvar alterações</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
</body>
</html>