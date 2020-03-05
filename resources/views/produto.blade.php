@extends('layouts.master')

@section('title','Produto')

@section('content')
<section class="container my-5 py-5">
    @if(isset($produto))
    <div class="row">
        <div class="col">
            <img src="{{ $produto->imagem }}" alt="" class="img-responsive">
        </div>
        <div class="col">
            <h1>{{ $produto['nome']}}</h1>
            <p>{{ $produto['descricao'] }}</p>
            <p>Categoria: {{ $nomeCategoria }}</p>
            <p>Editora: {{ $nomeEditora }}</p>
            <p class="preco">R$ {{ $produto['preco'] }}</p>
            <button class="comprar btn btn-primary">Comprar</button>
        </div>
    </div>
    <div class="row">
        <div class="col mt-5">
            <a href="/produtos" class="btn btn-default"> voltar para lista</a>
        </div>
    </div>
    @endif
</section>

@stop