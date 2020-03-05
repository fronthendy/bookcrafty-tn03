@extends('layouts.master')

@section('title', 'Cadastro de Produto')

@section('content')
<div class="container my-5 py-5">
  <h1>Cadastro de produtos</h1>
  <form method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <textarea name="descricao" id="descricao" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="preco">Preço</label>
      <input type="text" name="preco" id="preco" class="form-control">
    </div>
    <div class="form-group">
      <select name="fk_categoria" id="fk_categoria" class="form-control">
        <option disabled selected>Selecione uma opção</option>
        @if(isset($categorias))
        @foreach($categorias as $categoria)
        <option value="{{ $categoria->id_categoria }}">
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
        <option value="{{ $editora->id_editora }}">
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
    <div class="form-group">
      <button class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>
@stop