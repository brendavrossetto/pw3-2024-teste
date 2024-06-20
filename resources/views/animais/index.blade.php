{{-- resource/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para doação')

@section('conteudo')
<p>
    <a href="{{ route('animais.cadastrar') }}" > Cadastrar animal</a>
        Veja nossa lista de animais para doacao
</p>

<table border="1">
<tr>
<th>Nome</th>
<th>Idade</th>
</tr>

@foreach($animais as $animal )
    
<tr>
<td>{{ $animal['nome'] }}</td>
<td> {{ $animal['idade'] }} </td>
<td><a href="{{route('animais.apagar', $animal['id'])}}">Apagar</a></td>
</tr>

@endforeach

</table>

@endsection 