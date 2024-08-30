@extends('base')

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

<div class="leading-loose">
 
<form method="post" action="{{ route ('animais.gravar') }}" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
    @csrf
    <input type="text" name="nome" 
    placeholder="Nome" value="{{ old('nome')}}" >
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

@endsection