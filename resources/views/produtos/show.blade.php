<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver um produto</title>
</head>
<body>
    <label for="">Código</label> <br />
    <input type="text" name="codigo" value="{{ $produto->codigo }}"> <br />
    <label for="">Descrição</label> <br />
    <input type="text" name="descricao" value="{{ $produto->descricao }}"> <br />
    <label for="">Custo unitário</label> <br />
    <input type="text" name="custo" value="{{ $produto->custo }}"> <br />
</body>
</html>