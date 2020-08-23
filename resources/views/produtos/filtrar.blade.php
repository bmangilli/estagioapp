<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="211915">

    <title>Filtrar produtos</title>
    
    <link rel="stylesheet" href="{{ asset('css/partials/filter.css') }}">
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> 
    <script type="text/javascript" src="{{ asset('scripts/script.js') }}"></script> 
  <head>
  </head>
  <body>
    <div id="divConteudo">
      <table id="tabela">
        <thead>
          <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Custo</th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th><input type="text" id="txtColuna1"/></th>
            <th><input type="text" id="txtColuna2"/></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>				
        </thead><div id="divConteudo">
      <table id="tabela">
        <thead>
          <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Custo</th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th><input type="text" id="txtColuna1"/></th>
            <th><input type="text" id="txtColuna2"/></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>				
        </thead>
        
        <tbody>
          @foreach($filtro as $key => $parametro)
          <tr>
            <td>{{$parametro->codigo}}</td>
            <td>{{$parametro->descricao}}</td>
            <td>{{$parametro->custo}}</td>
            <td><a href="editar/{{$parametro->id}}"><b>Editar</b></a></td>
            <td><a href="excluir/{{$parametro->id}}"><b>Excluir</b></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
        
        <tbody>
          @foreach($filtro as $key => $parametro)
          <tr>
            <td>{{$parametro->codigo}}</td>
            <td>{{$parametro->descricao}}</td>
            <td>{{$parametro->custo}}</td>
            <td><a href="editar/{{$parametro->id}}"><b>Editar</b></a></td>
            <td><a href="excluir/{{$parametro->id}}"><b>Excluir</b></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
  </html>