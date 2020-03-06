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

    public function insert(Request $request)
    {

        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->fk_categoria = $request->fk_categoria;
        $produto->fk_editora = $request->fk_editora;

        $arquivo = $request->file('imagem');
        if (!empty($arquivo)) {
            // salvando
            $nomePasta = 'uploads';
            $arquivo->storePublicly($nomePasta); // nome temporario do arquivo
            $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName(); // faz a hash para nome do arquivo
            $caminhoRelativo = "/storage/$nomePasta/$nomeArquivo";
            // movendo
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            $produto->imagem = $caminhoRelativo;
        }

        $produto->save();

        return redirect('/admin/produto');
    }

    public function update($id_produto)
    {
        $produto = Produto::find($id_produto);
        $categorias = Categoria::all();
        $editoras = Editora::all();

        return view('editarProduto', compact('produto', 'categorias', 'editoras'));
    }

    public function put(Request $request, $id_produto)
    {
        $produto = Produto::find($id_produto);

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->fk_categoria = $request->fk_categoria;
        $produto->fk_editora = $request->fk_editora;

        $arquivo = $request->file('imagem');
        if (!empty($arquivo)) {
            // salvando
            $nomePasta = 'uploads';
            $arquivo->storePublicly($nomePasta); // nome temporario do arquivo
            $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName(); // faz a hash para nome do arquivo
            $caminhoRelativo = "/storage/$nomePasta/$nomeArquivo";
            // movendo
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            $produto->imagem = $caminhoRelativo;
        }

        $produto->save();

        return redirect('/admin/produto');
    }

    public function delete($id_produto)
    {
        $produto = Produto::find($id_produto);

        return view('deletarProduto', compact('produto'));
    }

    public function remove($id_produto)
    {
        $produto = Produto::find($id_produto);

        $produto->delete();

        return redirect('/admin/produto');
    }


    public function admin()
    {
        $produtos = Produto::all();

        return view('admin', compact('produtos'));
    }
}
