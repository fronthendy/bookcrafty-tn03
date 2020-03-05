@extends('layouts.master')

@section('title','Produtos')

@section('content')
<section id="produtos" class="new-products mt-5">
    <div class="container text-center">
        @if(isset($categorias))
        <div class="row">
            <div class="col-xs-12">
                @foreach($categorias as $categoria)
                <a href="produtos/categoria/{{ $categoria->id_categoria}}" class="btn btn-primary">{{ $categoria->nome }}</a>
                @endforeach
            </div>
        </div>
        @endif
        @if(isset($nomeCategoria))
        <div class="row">
            <div class="col-xs-12">
                <h2>Livros da categoria: {{$nomeCategoria}}</h2>
            </div>
        </div>
        @endif
        <div class="row">

            @if(isset($produtos))

            @foreach($produtos as $produto)

            <div class="livro col-sm-12 col-lg-4 my-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $produto['imagem'] }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $produto['nome'] }}</h5>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><strong>R$ {{ $produto['preco'] }}</strong></li>
                        </ul>
                        <a href="/produto/{{ $produto['id_produto'] }}" class="d-flex btn btn-primary my-3 justify-content-center comprar">Comprar</a>
                    </div>
                </div>
            </div>
            @endforeach

            {{ $produtos->render() }}

            @else

            <div class="col-md-12 alert alert-danger">
                Nenhum produto para exibir
            </div>

            @endif

        </div>
    </div>
</section>

@stop