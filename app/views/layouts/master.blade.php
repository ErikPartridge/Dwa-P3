<!Doctype html>
<html>
    <!--- This extends the master template --->
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