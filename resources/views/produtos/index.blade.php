@extends('app')
@section('content')

<div class="row">
  <div class="col-sm-12">
      <h1 class="display-3">Produtos Cadastrados</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>Referencia</td>
          <td>Nome</td>
          <td>Marca</td>
          <td>Ações</td>
        </tr>
      </thead>
      <tbody>
        @foreach($produtos as $produto)
          <tr>
              <td>{{$produto->referencia}}</td>
              <td>{{$produto->nome}}</td>
              <td>{{$produto->marca}}</td>
              <td>
                <a href="{{ route('produtos.edit', $produto->id)}}" class="btn btn-primary">Editar</a>
                <form action="{{ route('produtos.delete', $produto->id)}}" method="delete">
                  <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
