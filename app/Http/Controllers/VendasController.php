<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;

class VendasController extends Controller
{
    public function create()
    {
        return view('vendas.create');
    }

    public function store(Request $request)
    {
        Venda::create([
            'id' => $request->id,
            'emissao' => $request->emissao,
            'entrega' => $request->entrega,
            'codigo' => $request->codigo,
            'quantidade' => $request->quantidade,
        ]);

        return "Venda efetuada com sucesso!";
    }
    public function show($id)
    {
        $venda = Venda::findOrFail($id);
        return view('vendas.show', ['venda' => $venda]);
    }
}
