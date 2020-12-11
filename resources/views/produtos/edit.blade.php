@extends('app')
@section('content')

<h1>Editar Produto</h1>

<form action="/produtos/{{$produto->id}}" method="patch">
  <input type="hidden" name="_token" value="{{ $csrf_token }}">
  <label for="nome">Nome</label> <br />
  <input type="text" name="nome" value="{{$produto->nome}}"> <br />
  <label for="marca">Marca</label> <br />
  <input type="text" name="marca" value="{{$produto->marca}}"> <br />
  <label for="referencia">Referencia</label> <br />
  <input type="text" name="referencia" value="{{$produto->referencia}}"> <br />
  <button>Atualizar</button>
</form>

@endsection
