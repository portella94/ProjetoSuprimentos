@extends('app')
@section('content')

<h1>Cadastrar Novo Produto</h1>

<form action="/produtos" method="POST">
  <label for="nome">Nome</label> <br />
  <input type="text" name="nome"> <br />
  <label for="marca">Marca</label> <br />
  <input type="text" name="marca"> <br />
  <label for="referencia">Referencia</label> <br />
  <input type="text" name="referencia"> <br />
  <button>Cadastrar</button>
</form>

@endsection
