@extends('master')

 @section('title')
     DPolly.me: WebDev Tools Generate Loreum Ipsum Text
 @stop

  @section('content')
     <h1>Generating Loreum Ipsum Text Web Development Tools</h1>

     <?php
             $generator = new Badcow\LoremIpsum\Generator();
             $paragraphs = $generator->getParagraphs(5);
             echo implode('<p>', $paragraphs);
     ?>
 @stop