<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <link href="css/styles.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
        <header>
             <a href="/buscador" class='logo'>
              Logo
            </a>
            
            <nav>
              <ul>
                <li id="buscar-nav">
                  <a href="/buscador">Buscador</a>
                </li>
                <li id="historial-nav">
                  <a href="/historial">Historial</a>
                </li>
              </ul>
            </nav>
            
        </header>
    @yield('content')

</body>
</html>