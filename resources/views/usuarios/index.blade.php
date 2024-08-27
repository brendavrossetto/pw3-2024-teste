{{-- resource/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuarios atuais:')

@section('conteudo')
<p>
    <a href="{{ route('usuarios.cadastrar') }}" 
   > 
    Cadastrar mais um animal</a>
        Veja a lista de usuarios: 
</p>

<table border="1">
<tr>
<th>Id</th>
<th>Nome</th>
<th>Email</th>
<th>Username</th>
<th>Admin</th>

</tr>

@foreach($usuarios as $usuario )
    
<tr>
<td>{{ $usuario['id'] }}</td>
<td>{{ $usuario['name'] }}</td>
<td> {{ $usuario['email'] }} </td>
<td>@if($usuario['admin']== 0) não @else sim @endif</td>
<td> <a href="{{route('usuarios.apagar', $usuario['id'])}}"></a>Apagar</td>
</tr>

@endforeach

</table>

@endsection 