<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::paginate(3);
        $categorias = Categoria::all();

        return view('produtos', compact('produtos', 'categorias'));
    }

    public function show($id_produto)
    {
        $produto = Produto::find($id_produto);

        return view('produto', compact('produto'));
    }

    public function filtroCategoria($id_categoria)
    {
        $produtos = Produto::where('fk_categoria', '=', $id_categoria)->paginate(3);
        $categoria = Categoria::find($id_categoria);
        $nomeCategoria = $categoria->nome;

        return view('produtos', compact('produtos', 'nomeCategoria'));
    }
}
