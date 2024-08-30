{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p>
    <button class="px-4 py-1 text-white font-light tracking-wider bg-blue-800 rounded"><i class="fas fa-plus mr-3"></i><a href="{{ route('usuarios.inserir') }}">Cadastrar Usuário</a></button>
</p>
<p>Lista de usuários</p>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Admin</th>
        <th>Apagar</th>
    </tr>

    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{ $usuario->id }}</td>
        <td>{{ $usuario->name }}</td>
        <td>{{ $usuario->email }}</td>
        <td>{{ $usuario->admin ? 'Sim' : 'Não' }}</td>
        <td><a href="{{ route('usuarios.apagar', $usuario->id) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>
@endsection
