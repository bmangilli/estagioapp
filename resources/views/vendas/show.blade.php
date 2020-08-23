<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar venda</title>

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
                <a href="/central/vendas">
                    <img src="/images/icons/back.png" alt="Voltar">
                </a>
            </div>
            <div class="header-content">
                <strong>Visualizar venda</strong>
                <form id="search-codigo" action="{{ route('alterar_venda', ['id' => $venda->id]) }}" method="POST">
                    @csrf
                    <div class="select-block">
                        <label for="">ID</label> <br />
                        <input type="number" name="id" value="{{ $venda->id }}"> <br />
                        <label for="">Código do produto</label> <br />
                        <input type="number" name="codigo" value="{{ $venda->codigo }}"> <br />
                        <label for="" style="color: black;">Emissão</label> <br />
                        <input type="date" name="emissao" value="<?php echo date('Y-m-d',strtotime($venda->emissao));?>"> <br />
                        <label for="" style="color: black;">Entrega</label> <br />
                        <input type="date" name="entrega" value="<?php echo date('Y-m-d',strtotime($venda->entrega));?>"> <br />
                        <label for="" style="color: black;">Quantidade</label> <br />
                        <input type="number" name="quantidade" value="{{ $venda->quantidade }}"> <br />
                        <label for="" style="color: black;">Situação</label> <br />
                        <select name="situacao"> <br />
                            <option name="situacao" value="{{ $venda->situacao }}" selected>{{ $venda->situacao }}</option>
                            <option name="situacao" value="Não entregue">Não entregue</option>
                            <option name="situacao" value="Entregue">Entregue</option>
                        </select>
                        <button><img src="/images/icons/save.png" alt="Salvar alterações">Salvar alterações</button>
                    </div>
                </form>
                <form id="search-codigo" action="{{ route('excluir_venda', ['id' => $venda->id]) }}" method="POST">
                    @csrf
                    <button {{-- onclick='window.location ="/vendas/novo"' --}}><img src="/images/icons/trash.png" alt="Excluir">Excluir</button>
                </form>
            </div>
        </header>
    </div>
</body>
</html>