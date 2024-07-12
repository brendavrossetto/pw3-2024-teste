<html>
    <head>
        <tittle>@yield('titulo')</tittle>
</head>
<body>
    <h1>@yield('titulo')</h1>
    <hr>
    <a href="{{route('index')}}">Inicial</a>
    |
    <a href="{{route('animais')}}">Animais</a>
    <hr>
    <a href="{{route('usuarios')}}">Usuarios</a>
    <hr>
    @if (Auth::user())
    ola, <strong> {{Auth::user()['name']}}</strong>
    <a href="{{route('logout')}}">Logout</a>
    @else 
    <a href="{{route('login')}}">Login</a>
    @endif
    <hr>
    
    @yield('conteudo')
</body>
</html>