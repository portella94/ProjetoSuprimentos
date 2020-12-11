@extends('app')
@section('content')
@extends('layouts.app')

@section('content')
<form action="{{route('usuarios.destroy', ['usuario' => $usuario->getKey()])}}" method="post">
    <div class="form-group">
        <label>Nome</label><Input type="text" class="form-control" name="nome" value="{{ $usuario->nome }}" readonly>
    </div>
    <div class="form-group">
        <label>Telefone</label><Input type="text" class="form-control" name="telefone" value="{{ $usuario->telefone }}"
            readonly>
    </div>
    <div class="form-group">
        <label>Email</label><Input type="text" class="form-control" name="email" value="{{ $usuario->email }}" readonly>
    </div>
    <div class="form-group">
        <a href="{{route('usuarios.edit', ['usuario' => $usuario->getKey()])}}" class="btn btn-primary">Editar</a>
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar</button>
    </div>
</form>
@endsection
@endsection
