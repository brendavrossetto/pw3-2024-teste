{{-- resource/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para doação')

@section('conteudo')
<p>
    <a href="{{ route('animais.cadastrar') }}" > Cadastrar animal</a>
        Veja nossa lista de animais para doacao
</p>

@endsection 