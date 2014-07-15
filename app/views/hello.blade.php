@extends('layouts/master')
<!--- This is the main page, CSS'd, redirects to other pages based on input --->
@section('title')
Developer Helper
@stop

@section('content')
<form action = "action.blade.php" method="get">
    How Many Users? <input type="number" name="usr" value="3">
</form>

@stop