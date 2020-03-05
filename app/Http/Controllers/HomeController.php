<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use App\Editora;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = Produto::all()->take(3);
        return view('home', compact('produtos'));
    }

    public function sobre()
    {
        $livros = Produto::count();
        $categorias = Categoria::count();
        $editoras = Editora::count();

        return view('sobre', compact('livros', 'categorias', 'editoras'));
    }
}
