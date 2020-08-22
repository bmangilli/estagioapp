<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar venda</title>
</head>
<body>
    <label for="">ID</label> <br />
    <input type="text" name="id" value="{{ $venda->id }}"> <br />
    <label for="">Emissão</label> <br />
    <input type="text" name="emissao" value="{{ $venda->emissao }}"> <br />
    <label for="">Entrega</label> <br />
    <input type="text" name="entrega" value="{{ $venda->entrega }}"> <br />
    <label for="">Codigo</label> <br />
    <input type="text" name="codigo" value="{{ $venda->codigo }}"> <br />
    <label for="">Quantidade</label> <br />
    <input type="text" name="quantidade" value="{{ $venda->quantidade }}"> <br />
</body>
</html>