@extends('master')

 @section('title')
     Dpolly.me Project3 Text
 @stop

 @section('content form')

    <div class="panel">
         <h4>Number of Paragraphs</h4>
         {{ Form::open(array('url' => '/text', 'method' => 'POST')) }}
            {{ Form::input('text', 'paragraph') }}
            {{ Form::submit('Generate'); }}
          {{ Form::close() }}
    </div>

 @stop


