<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use App\Editora;

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
        $nomeCategoria = Categoria::find($produto->fk_categoria)->nome;
        $nomeEditora = Editora::find($produto->fk_editora)->nome;

        return view('produto', compact('produto', 'nomeCategoria', 'nomeEditora'));
    }

    public function filtroCategoria($id_categoria)
    {
        $produtos = Produto::where('fk_categoria', '=', $id_categoria)->paginate(3);
        $categoria = Categoria::find($id_categoria);
        $nomeCategoria = $categoria->nome;

        return view('produtos', compact('produtos', 'nomeCategoria'));
    }

    public function create()
    {
        $editoras = Editora::all();
        $categorias = Categoria::all();

        return view('cadastroProduto', compact('editoras', 'categorias'));
    }
}
