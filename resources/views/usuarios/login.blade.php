@extends('base')

@section('titulo', 'Login')
@section('conteudo')

@if(session('erro'))
    <div style="background-color:red; color:white">
    {{ session ('erro')}}
    </div>
@endif

@if($errors->any())
<div>
<h4>preencha o form plsss</h4>
@foreach($errors->all() as $erro)
<p>{{ $error }}</p>
@endforeach
</div>
@endif

<form action="{{route('login')}}" method="post">
@csrf
    <input type="text" name="username" placeholder="Usuario">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <input type="submit" name="Entrar" >
</form>

@endsection