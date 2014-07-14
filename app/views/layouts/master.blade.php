<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Erik Malmstrom-Partridge">
        {{HTML::style("css/main.css")}}
        <title>@yield('title')</title>
    </head>

    <body>
        <div class="nav-top">
             <a href="{{url('views/users', $parameters = array(), $secure = null);}}"> Users </a>
             <a href="{{url('views/password', $parameters = array(), $secure = null);}}"> Password </a>
             <a href="{{url('views/lipsum', $parameters = array(), $secure = null);}}"> Lorem Ipsum</a>
        </div>
        @yield('content')
    </body>
</html>