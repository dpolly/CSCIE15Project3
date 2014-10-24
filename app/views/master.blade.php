<!DOCTYPE html>

<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title', 'Dpolly.me Project3')</title>
        <link rel="stylesheet" href='{{ URL::asset('css/foundation.css') }}' />
        <link rel="stylesheet" href='{{ URL::asset('css/app.css') }}' />
     </head>

    <body>

        <div id="header" class="row">
            <div class="small-3 columns">
                <img src='{{ asset('img/logo.png') }}' alt="Logo">
            </div>
            <div class="panel">
                <h1>Developer's Best Friend</h1>
                <h4>The tools every developer needs for website development</h4>
            </div>
        </div>
        <div id="content" class="row">
            <div class="small-4 columns">
                <h3>I need some .....</h3>
                <a href="tools">Cool Web Tools!</a><br>
                <a href="text">Loreum Ipsum Text </a><br>
                <a href="users">Random Users</a><br>
                <a href="validators">Validators</a>
            </div>
            <div class="small-8 columns">
                     @yield('content form')
                     @yield('content')
            </div>
        </div>
        <div id="footer" class="row">
            <div class="panel" >
                <h6>CSCIE-15 Dynamic Web Applications Project 3</h6>
            </div>
        </div>
    </body>
</html>
