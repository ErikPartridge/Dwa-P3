@extends('layouts/master')
<!--- This is the main page, CSS'd, redirects to other pages based on input --->
@section('title')
Developer Helper
@stop

@section('content')
<p>Welcome to developer helper! This site is designed to provide useful tools to developers, and to be easy to access
from your own program. Please enjoy the site!
</p>
{{Form::open(array('url' => 'user', 'method' => 'post'))}}
    How many users do you want to generate?<br>
    <input type="number" name = "users" value="12"/> <br>
    {{Form::submit('Fake Some Identities!')}}
{{Form::close()}}
<br>
{{Form::open(array('url' => 'lipsum', 'method' => 'post'))}}
    How many paragraphs of lorem ipsum?<br>
    <input type="number" name = "nums" value="12"/> <br>
    {{Form::submit('Make Some Lorem Ipsum!')}}
{{Form::close()}}

@stop