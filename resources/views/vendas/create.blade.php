<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realizar venda</title>

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
                <strong>Nova venda</strong>
                <form id="search-codigo" action="{{ route('cadastrar_venda') }}" method="POST">
                    @csrf
                    <div class="select-block">
                        <label for="">ID do produto</label> <br />
                        <input type="number" name="id"> <br />
                        <label for="" style="color: black;">Código do produto</label> <br />
                        <input type="number" name="codigo"> <br />
                        <label for="" style="color: black;">Data de emissão</label> <br />
                        <input type="date" name="emissao"> <br />
                        <label for="" style="color: black;">Data de entrega</label> <br />
                        <input type="date" name="entrega"> <br />
                        <label for="" style="color: black;">Quantidade</label><br />
                        <input type="number" step="any" name="quantidade"> <br /> <br />
                        <button><img src="/images/icons/save.png" alt="Cadastrar venda">Cadastrar venda</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
</body>
</html>