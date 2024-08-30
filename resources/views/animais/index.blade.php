{{-- resource/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais atuais:')

@section('conteudo')
<p>
    <a href="{{ route('animais.cadastrar') }}"  class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"> <i class="fas fa-paw"> </i> Cadastrar mais um animal </a>
</p>

<div class="md:px-32 py-8 w-full">
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
    <table class="min-w-full bg-white">
    <thead class="bg-gray-800 text-white">
    <tr>
    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Id</th>
    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Idade</th>
    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Diagnostico</th>
    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Data de Internação</td>
    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Data de Alta</td>
    </tr>
    </thead>
    </div>
    </div>
    
@foreach($animais as $animal )
    
<tr>
<td class="w-1/3 text-left py-3 px-4">{{ $animal['id'] }}</td>
<td class="w-1/3 text-left py-3 px-4">{{ $animal['nome'] }}</td>
<td class="w-1/3 text-left py-3 px-4"> {{ $animal['idade'] }} </td>
<td class="w-1/3 text-left py-3 px-4"> {{ $animal['diagnostico'] }} </td>
<td class="w-1/3 text-left py-3 px-4"> {{ $animal['dataInternacao'] }} </td>
<td class="w-1/3 text-left py-3 px-4"> {{ $animal['dataAlta'] }} </td>

{{-- <td><a href="{{route('animal.apagar', $animal['id'])}}">Apagar</a></td> --}}
</tr>

@endforeach

</table>

@endsection 


