@extends('layouts/master')

@section('title')
Lorem Ipsum Text
@stop
@section('style')
<style> body{padding-right: 0%; padding-left: 0%;}</style>
@stop

@section('content')

<?php
use \Badcow\LoremIpsum as Lipsum;
// Make it take whole screen, because there is so much text

$gen = new Lipsum\Generator();

$text = $gen->getParagraphs($paragraphs);
//put text in paragraph form
$string = "<div class=\"lipsum\">".implode("<p>", $text)."</div>";
//echo out the text
echo $string;

?>

@stop