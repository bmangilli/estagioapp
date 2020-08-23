<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use DB;

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

        header('Refresh: 0; URL=/central/vendas');
    }
    public function show($id)
    {
        $venda = Venda::findOrFail($id);
        return view('vendas.show', ['venda' => $venda]);
    }
    public function update(Request $request, $id)
    {
        $venda = Venda::findOrFail($id);

        $venda->update([
            'id' => $request->id,
            'emissao' => $request->emissao,
            'entrega' => $request->entrega,
            'codigo' => $request->codigo,
            'quantidade' => $request->quantidade,
            'situacao' => $request->situacao,
        ]);
        header('Refresh: 0; URL=/central/vendas');
    }
    public function destroy($id)
    {
        $venda = Venda::findOrFail($id);
        $venda->delete();

        header('Refresh: 0; URL=/central/vendas');
    }
    public function filtrar() {

        $filtro = DB::table('vendas')->get();
    
        return view('central.admvendas', ['filtro' => $filtro]);
    }
}
