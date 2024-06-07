@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
<p>Preencha o formulario: </p>
<form method="post" action="{{ route ('animais.gravar') }}">
    <input type="text" name="nome"
    placeholder="Nome">
    <br>
    <input type="number" name="idade"
    placeholder="Idade">
    <br>
    <input type="submit" name="Gravar">
</form>

@endsection