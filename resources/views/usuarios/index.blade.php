{{-- resource/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuarios atuais:')

@section('conteudo')
<p>
    <a href="{{ route('usuarios.cadastrar') }}" > Cadastrar mais um usuario</a>
        Veja a lista de usuarios: 
</p>

<table border="1">
<tr>
<th>Id</th>
<th>Nome</th>
<th>Email</th>
<th>Senha</th>

</tr>

@foreach($usuarios as $usuario )
    
<tr>
<td>{{ $usuario['id'] }}</td>
<td>{{ $usuario['nome'] }}</td>
<td> {{ $usuario['email'] }} </td>
<td> {{ $usuario['senha'] }} </td>


</tr>

@endforeach

</table>

@endsection 