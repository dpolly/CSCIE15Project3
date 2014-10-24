 @extends('master')

 @section('title')
     Dpolly.me Project3 Text
 @stop

 @section('content')
    <div class="panel" id="contents">
        @if($num_paragraphs >0)
            <?php
               $generator = new Badcow\LoremIpsum\Generator();
               $paragraphs = $generator->getParagraphs($num_paragraphs);
               echo implode('<p>', $paragraphs);
             ?>
        @endif
    </div>
 @stop