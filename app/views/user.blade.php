@extends('layouts/master')

@section('title')
Random Users: {{$number}}
@stop


@section('content')

<?php $generator = \Faker\Factory::create();
//Generate a user, with name, address and email
for($i = 0; $i < $number; $i++){

    $user = "<p>".$generator->name."<br>";
    $user = $user.$generator->address."<br>";
    $user = $user.$generator->email."<br>";
    $user = $user."</p>";

    echo $user;
} ?>
@stop