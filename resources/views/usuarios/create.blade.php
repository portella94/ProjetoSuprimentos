@extends('app')
@section('content')
<form action="{{route('usuarios.store')}}" method="POST" enctype="muitipart/form-data">

    <div class="form-group">
        <label>Nome</label><Input type="text" class="form-control" name="nome">
    </div>
    <div class="form-group">
        <label>Telefone</label><Input type="text" class="form-control" name="telefone">
    </div>
    <div class="form-group">
        <label>Email</label><Input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
@endsection
