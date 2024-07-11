@extends('base')

@section('titulo', 'Login')

@section('conteudo')

<form action="{{route('login')}}" method="post">
@csrf
    <input type="text" name="username" placeholder="Usuario">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <input type="submit" name="Entrar" >
</form>

@endsection