{{-- resource/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais atuais:')

@section('conteudo')
<p>
    <a href="{{ route('animais.cadastrar') }}  class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit"> <i class="fas fa-paw"></i> " > Cadastrar mais um animal</a>
        Veja a lista de animais: 
</p>

<table border="1">
<tr>
<th>Id</th>
<th>Nome</th>
<th>Idade</th>
<th>Diagnostico</th>
<th>Data de Internação</th>
<th>Data da Alta</th>
</tr>

@foreach($animais as $animal )
    
<tr>
<td>{{ $animal['id'] }}</td>
<td>{{ $animal['nome'] }}</td>
<td> {{ $animal['idade'] }} </td>
<td> {{ $animal['diagnostico'] }} </td>
<td> {{ $animal['dataInternacao'] }} </td>
<td> {{ $animal['dataAlta'] }} </td>

{{-- <td><a href="{{route('animal.apagar', $animal['id'])}}">Apagar</a></td> --}}
</tr>

@endforeach

</table>

@endsection 