<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de produtos</title>

    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/boxes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/page-produtos.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> 
    <script type="text/javascript" src="{{ asset('scripts/script.js') }}"></script> 
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
                        <table id="tabela">
                            <thead>
                                <tr>
                                <th><label for="">Código do produto</label></th>
                                <th><label for="">Descrição</label></th>
                                <th><label for="">Custo<small>(R$)</small> </label></th>
                                </tr>
                                <th><input type="number" id="txtColuna1" name="codigo"></th>
                                <th><input type="text" id="txtColuna2" name="descricao"></th>
                                </tr>
                                <tbody>
                                    @foreach($filtro as $key => $parametro)
                                    <tr>
                                    <td>{{$parametro->codigo}} </br></td>
                                    <td>{{$parametro->descricao}}</td>
                                    <td>{{$parametro->custo}}</td>
                                    <td><a href="../produtos/editar/{{$parametro->id}}"><b>Editar</b></a></td>
                                    <td><a href="../produtos/excluir/{{$parametro->id}}"><b>Excluir</b></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>			
                            </thead>
                        </table>
                    </div>
                    <button type="button" onclick='window.location ="/produtos/novo"'> <img src="/images/icons/labeltag.png" alt="Cadastrar produto">
                        Cadastrar produto</button>
                </form>
                
            </div>
            
        </header>
    </div>

</body>
</html>