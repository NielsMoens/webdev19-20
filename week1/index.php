<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>color</h1>
    <?php
    //include_once 'data.php';
    //include 'data.php';
    //require 'data.php';
    require_once 'data.php';

    // var_dump($colors);
    // exit;//voortijdens het debuggen 
    // print '<br>';
    // print_r($colors);
    
    foreach ($colors as $item){
        // echo '<div class="colors" style="background-color:'. $item . '">'
        // . $item .
        // '</div>';

        ?>
        <div class="color" style="background-color:<?php echo $item ?>">
        <p> Mijn kleur <?php echo $item?>*</p>
        </div>
        <?php //andere manier voor tzelfde 
    }

    for ($x = 0; $x <= 50; $x++){
        echo '<div style="background-color: hsl(0, 0%,'. $x .'%)">' 
        . $x .
        '</div>';
    } 

    echo '<section style="display:flex ; flex-wrap:wrap" >';
    for ($y= 0; $y <= 360; $y++){
        echo '<div style="background-color: hsl('. $y .', 100%, 50%) ; display:block ; width:1  % ;height:1vh"></div>';
    } 
    echo '</section>';
     EcHo "<br>loading done";
    ?>
</body>
</html>