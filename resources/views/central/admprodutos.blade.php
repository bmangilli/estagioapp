<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aut | Administração interna</title>

    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">

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
                <a href="/">
                <img src="/images/icons/back.png" alt="Voltar">
                </a>
            </div>

            <div class="header-content">
                <strong>Pesquisar produtos</strong>
                <form id="search-codigo">
                    <div class="select-block">
                        <label for="">Código do produto</label>
                        <input type="number" name="codigo">
                    </div>
                    <div class="select-block">
                        <label for="">Descrição</label>
                        <input type="text" name="descricao">
                    </div>
                    <button type="submit">Filtrar</button>
                    <button type="button" onclick='window.location ="/produtos/novo"'> <img src="/images/icons/basket.png" alt="Cadastrar produto">
                        Cadastrar produto</button>
                </form>
                
            </div>
        </header>
    </div>

</body>
</html>