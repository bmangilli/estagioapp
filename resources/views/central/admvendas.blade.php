<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de vendas</title>

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
                <strong>Cadastro de vendas</strong>
                <form id="search-codigo">
                    <div class="select-block">
                        <table id="tabela">
                            <thead>
                                <tr>
                                <th></th>
                                <th><label for="">ID</label></th>
                                <th><label for="">Código do produto</label></th>
                                <th><label for="">Emissão</label></th>
                                <th><label for="">Entrega</label></th>
                                <th><label for="">Quantidade<small>(Un)</small></label></th>
                                <th><label for="">Situação</label></th>
                                {{-- <th><label for="">Custo<small>(R$)</small> </label></th> --}}
                                </tr>
                                <th></th>
                                <th><input type="number" id="txtColuna1" name="id" style="max-width: 8ch;"></th>
                                <th><input type="number" id="txtColuna2" name="codigo" style="max-width: 15ch;"></th>
                                </tr>
                                <tbody>
                                    @foreach($filtro as $key => $parametro)
                                    <tr>
                                    <td align="center" style="width: 5rem;"><a href="../vendas/ver/{{$parametro->id}}" style="margin-left: 0;"><b>Ver</b></a></td>
                                    <td style="max-width: 8ch;">{{$parametro->id}} </br></td>
                                    <td align="center" style="max-width: 15ch;">{{$parametro->codigo}}</td>
                                    <td align="center" style="width: 10rem;"><?php echo date('d/m/Y',strtotime($parametro->emissao));?></td>
                                    <td align="center" style="width: 10rem;"><?php echo date('d/m/Y',strtotime($parametro->entrega));?></td>
                                    <td align="center">{{$parametro->quantidade}}</td>
                                    <td align="center" style="width: 15rem;">{{$parametro->situacao}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>			
                            </thead>
                        </table>
                    </div>
                    <button type="button" onclick='window.location ="/vendas/novo"'> <img src="/images/icons/basket.png" alt="Cadastrar venda">
                        Cadastrar venda
                    </button>
                </form>
                
            </div>
            
        </header>
    </div>

</body>
</html>