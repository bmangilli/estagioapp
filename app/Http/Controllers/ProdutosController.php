<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller

{
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'codigo' => $request->codigo,
            'descricao' => $request->descricao,
            'custo' => $request->custo,
        ]);

        return "Produto Criado com Sucesso!";
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->update([
            'codigo' => $request->codigo,
            'descricao' => $request->descricao,
            'custo' => $request->custo,
        ]);

        return "Produto Atualizado com Sucesso!";
    }
    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return "Produto Excluído com Sucesso";
    }
}