@extends('app')
@section('content')
<div class="col-12 col-md-8">
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Novo</a>
</div>
<br>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Usuários Cadastrados</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Telefone</td>
                    <td>Email</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                @forelse($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->nome}}</td>
                    <td>{{$usuario->telefone}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', $usuario->getKey())}}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario->getKey())}}" method="DELETE">
                            <button class="btn btn-danger" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
                @empty
                <td>Nada para mostrar!</td>
                <td></td>
                <td></td>
                <td></td>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
