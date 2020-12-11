<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function new()
    {
        return view('produtos.new');
    }

    public function edit($id)
    {
      $produto = Produto::findOrFail($id);
      
      return view('produtos.edit', compact('produto'));
    }

    public function create(Request $request)
    {
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->marca = $request->marca;
        $produto->referencia = $request->referencia;

        $produto->save();

        return redirect()->route('produtos.index');
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->nome = $request->nome;
        $produto->marca = $request->marca;
        $produto->referencia = $request->referencia;

        $produto->save();

        return redirect()->route('produtos.index');
    }

    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index');
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }
}
