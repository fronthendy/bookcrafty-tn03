@extends('layouts.master')

@section('title', 'Admin')

@section('content')
<div class="container my-5 py-5">
  <h2>Produtos
    <a href="/admin/produto/create" class="btn btn-primary mb-2">Novo produto</a>
  </h2>
  <table class="table">
    <thead>
      <tr>
        <td>id</td>
        <td>nome</td>
        <td>categoria</td>
        <td>ações</td>
      </tr>
    </thead>
    <tbody>
      @if(isset($produtos) && count($produtos) > 0)
      @foreach($produtos as $produto)
      <tr>
        <td>
          <a href="/admin/produto/{{$produto->id_produto}}">{{$produto->id_produto}}</a>
        </td>
        <td>
          <a href="/admin/produto/{{$produto->id_produto}}">{{$produto->nome}}</a>
        </td>
        <td>
          <a href="/admin/produto/{{$produto->id_produto}}">{{$produto->categoria->nome}}</a>
        </td>
        <td>
          <a href="/admin/produto/{{ $produto->id_produto }}" class="btn btn-secondary">editar</a>
          <a href="/admin/produto/excluir/{{ $produto->id_produto }}" class="btn btn-danger">excluir</a>
        </td>
      </tr>
      @endforeach
      @else

      <tr class="alert alert-info">
        <td>Nenhum produto para exibir</td>
      </tr>

      @endif
    </tbody>
  </table>
</div>
@stop