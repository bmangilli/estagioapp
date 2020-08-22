<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar um novo produto</title>
</head>
<body>
    <form action="{{ route('cadastrar_produto') }}" method="POST">
        @csrf
        <label for="">Código do produto</label> <br />
        <input type="number" name="codigo"> <br />
        <label for="">Descrição</label> <br />
        <input type="text" name="descricao"> <br />
        <label for="">Custo unitário</label><small> (R$)</small> <br />
        <input type="number" step=".01" name="custo"> <br /> <br />
        <button>Cadastrar produto</button>
    </form>
</body>
</html>