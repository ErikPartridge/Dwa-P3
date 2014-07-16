@extends('layouts/master')

@section('title')
Lorem Ipsum Text
@stop


@section('content')

<?php
use \Badcow\LoremIpsum as Lipsum;
$style = "<style> body{padding-right: 0%; padding-left: 0%;}</style>";
$gen = new Lipsum\Generator();

$text = $gen->getParagraphs($paragraphs);
//put text in paragraph form
$string = "<div class=\"lipsum\">".implode("<p>", $text)."</div>";
//echo out the text
echo $string.$style;

?>

@stop