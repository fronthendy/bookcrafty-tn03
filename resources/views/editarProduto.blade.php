@extends('layouts.master')

@section('title', 'Editar Produto')

@section('content')
<div class="container my-5 py-5">
  <h1>Editar produto</h1>
  @if(isset($produto))
  <form method="post" enctype="multipart/form-data" action="/admin/produto/{{$produto->id_produto}}">
    @csrf
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control" value="{{ $produto->nome }}">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <textarea name="descricao" id="descricao" class="form-control">
      {{ $produto->descricao }}
      </textarea>
    </div>
    <div class="form-group">
      <label for="preco">Preço</label>
      <input type="text" name="preco" id="preco" class="form-control" value="{{ $produto->preco }}">
    </div>
    <div class="form-group">
      <select name="fk_categoria" id="fk_categoria" class="form-control">
        <option disabled selected>Selecione uma opção</option>
        @if(isset($categorias))
        @foreach($categorias as $categoria)
        <!-- seleciona categoria com if ternario -->
        <option value="{{ $categoria->id_categoria }}" {{($categoria->id_categoria == $produto->fk_categoria) ? 'selected' : ''}}>
          {{ $categoria->nome }}
        </option>
        @endforeach
        @endif
      </select>
    </div>
    <div class="form-group">
      <select name="fk_editora" id="fk_editora" class="form-control">
        <option disabled selected>Selecione uma opção</option>
        @if(isset($editoras))
        @foreach($editoras as $editora)
        <!-- seleciona editora com if ternario -->
        <option value="{{ $editora->id_editora }}" {{($editora->id_editora == $produto->fk_editora) ? 'selected' : ''}}>
          {{ $editora->nome }}
        </option>
        @endforeach
        @endif
      </select>
    </div>
    <div class="form-group">
      <label for="imagem">Imagem</label> <br>
      <input type="file" name="imagem" id="imagem">
    </div>
    <div class="form-group col-md-4">
      <img src="{{ $produto->imagem }}" class="img-thumbnail" alt="capa de {{ $produto->nome }}">
    </div>
    <div class="form-group">
      <button class="btn btn-primary">Enviar</button>
    </div>
  </form>
  @else
  <div class="row">
    <div class="col-xs-12 alert alert-warning">Nenhum produto encontrado</div>
  </div>
  @endif
</div>
@stop