{{-- @extends('base')

@section('titulo', 'Cadastrar')

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

<form method="post" action="{{ route ('pacientes.gravar') }}">
    @csrf
    <input type="text" name="nome"
    placeholder="Nome" value="{{ old('nome')}}">
    <br>
    <input type="number" name="idade"
    placeholder="Idade" value="{{ old('idade')}}">
    <br>
    <input type="text" name="diagnostico"
    placeholder="Diagnostico" value="{{ old('diagnostico')}}">
    <br>
    <input type="text" name="dataInternacao"
    placeholder="Data da internacao" value="{{ old('dataInternacao')}}">
    <br>
    <input type="text" name="dataAlta"
    placeholder="Data da alta" value="{{ old('dataAlta')}}">
    <br>
    <input type="submit" name="Gravar">
</form>

@endsection --}}

@extends('templates/layout')
@section('titulo', 'Página de Produtos - Editar')
@section('corpo')
 <h1>Produtos - Editar</h1>
 @if ($errors->any())
 <p>Preencha os campos corretamente.</p>
 <ul>
 @foreach($errors->all() as $erro)
 <li>{{ $erro }}</li>
 @endforeach
 </ul>
 @endif
 <form action="{{ route('animal/editar', $animal->id) }}" method="post">
 @csrf
 @method('put')

 <p><input value="{{ old('nome', $animal->nome ?? '') }}" type="text" name="nome"
placeholder="Nome do Animal" value=""></p>

 <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição">{{
old('descricao', $animal->descricao ?? '') }}</textarea></p>
 <p><input type="submit" value="Gravar"></p>
 </form>
@endsection