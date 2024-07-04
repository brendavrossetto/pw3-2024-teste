<html>
    <head>
        <tittle>@yield('titulo')</tittle>
</head>
<body>
    <h1>@yield('titulo')</h1>
    <hr>
    <a href="{{route('index')}}">Inicial</a>
    |
    <a href="{{('animais')}}">Animais</a>
    <hr>
    @yield('conteudo')
</body>
</html>