@extends('layouts/master')

@section('title')
Generated {{$paragraphs}} paragraphs of Text
@stop


@section('content')

<?php
use \Badcow\LoremIpsum as Lipsum;

$gen = new Lipsum\Generator();

$text = $gen->getParagraphs($paragraphs);
//put text in paragraph form
$string = "<div class=\"lipsum\">".implode("<p>", $text)."</div>";
//echo out the text
echo $string;

?>

@stop