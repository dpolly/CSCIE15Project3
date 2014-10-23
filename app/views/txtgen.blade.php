@extends('master')

@section('title')
     Dpolly.me Project3 Text
 @stop

@section('content')
    @if($num_paragraphs >0)
    <div class="panel">
       <?php
               $generator = new Badcow\LoremIpsum\Generator();
               $paragraphs = $generator->getParagraphs($num_paragraphs);
               echo implode('<p>', $paragraphs);
         ?>
    </div>
    @endif
@stop