<!Doctype html>
<html>
    <!--- This is the master template for the main page --->
    <head>
        <meta charset="UTF-8">
        {{ HTML::style("/css/main.css"); }}
        <meta name="author" content="Erik Malmstrom-Partridge">
        <title>@yield('title')</title>
    </head>
    <body>
        @yield('content')
    </body>
</html>