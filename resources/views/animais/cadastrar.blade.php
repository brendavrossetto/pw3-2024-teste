@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
<p>Preencha o formulario: </p>

@if($errors->any())
<div>
    <h2>deu ruim</h2>
    @foreach($errors->all() as $erro)
    <p>{{$erro}}</p>
    @endforeach
</div>
@endif 

<form method="post" action="{{ route ('animais.gravar') }}">
    @csrf
    <input type="text" name="nome"
    placeholder="Nome" value="{{ old('nome')}}">
    <br>
    <input type="number" name="idade"
    placeholder="Idade" value="{{ old('idade')}}">
    <br>
    <input type="submit" name="Gravar">
</form>

@endsection