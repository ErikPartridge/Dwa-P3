@extends('layouts/master')
<!--- This is the main page, CSS'd, redirects to other pages based on input --->
@section('title')
Developer Helper
@stop

@section('content')
<p>Welcome to developer helper! This site is designed to provide useful tools to developers, and to be easy to access
from your own program. To get # number of paragraphs of lorem ipsum text, go to p3.erikpartridge.com/lipsum/# . The text
will be formatted as HTML, with the text starting on line 13. For # number of random users, go to p3.erikpartridge.com/user/# .
Users will be separated by a break and paragraph tags, starting on line 12.
</p>
@stop