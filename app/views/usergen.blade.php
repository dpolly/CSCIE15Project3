 @extends('master')

 @section('title')
     Dpolly.me Project3 Users
 @stop

 @section('content')
    <div class="panel" id="contents">
        @for ($i = 1; $i <= $num_users; $i++)
            <?php
                 $faker = Faker\Factory::create();
                echo $faker->name;
            ?>
            <br>
        @endfor
    </div>
 @stop
