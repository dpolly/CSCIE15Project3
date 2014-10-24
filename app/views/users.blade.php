@extends('master')

 @section('title')
     Dpolly.me Project3 Users
 @stop

 @section('content form')
     <div class="panel">
        <h4>How many users do you need?</h4>
             {{ Form::open(array('url' => '/users', 'method' => 'POST')) }}
             {{ Form::input('text', 'users') }}
             {{ Form::submit('Generate'); }}
             {{ Form::close() }}
     </div>
 @stop