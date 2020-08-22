<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realizar venda</title>
</head>
<body>
    <form action="{{ route('cadastrar_venda') }}" method="POST">
        @csrf
        <label for="">ID do produto</label> <br />
        <input type="number" name="id"> <br />
        <label for="">Código do produto</label> <br />
        <input type="number" name="codigo"> <br />
        <label for="">Data de emissão</label> <br />
        <input type="date" name="emissao"> <br />
        <label for="">Data de entrega</label> <br />
        <input type="date" name="entrega"> <br />
        <label for="">Quantidade</label><br />
        <input type="number" step="any" name="quantidade"> <br /> <br />
        <button>Cadastrar venda</button>
    </form>
</body>
</html>