@extends('app')

@section('content')
<form action="{{ route('usuarios.update', ['usuario' => $usuario->getKey()] ) }}" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label>First Name</label><Input type="text" class="form-control" name="nome" value="{{ $usuario->nome }}">
    </div>
    <div class="form-group">
        <label>Telefone</label><Input type="text" class="form-control" name="telefone" value="{{ $usuario->telefone }}">
    </div>
    <div class="form-group">
        <label>Email</label><Input type="text" class="form-control" name="email" value="{{ $usuario->email }}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Atualizar</button>
    </div>
</form>
@endsection
