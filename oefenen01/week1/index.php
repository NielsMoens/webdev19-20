<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    require 'data.php';

    foreach ($colors as $block)  { 
        ?>
        <div class= "color" style="background-color:<?php echo $block ?>">
        <p>Mijn kleur <?php echo $block ?></p>
        <?php
    }
    for ($i=0; $i < 50; $i++) { 
        echo'<div style="background-color: hsl(0, 0%,' . $i . '%)">' . $i . '</div>';
    }
    echo '<section style="display:flex ; flex-wrap:wrap" >';
    for ($y= 0; $y <= 360; $y++){
        echo '<div style="background-color: hsl('. $y .', 100%, 50%) ; display:block ; width:1% ;height:1vh"></div>';
    } 
    echo '</section>';
    EcHo "<br>loading done";

    //  CARS  
    foreach ($cars as $car){
        ?>
            <div class="car">
                <h2>
                    <?php echo $car['brand']. '' . $car['type']; ?>
                </h2>
                <img src="<?php echo $car['item'] ?>" alt="naam">
                <ul>
                    <li>Brandstof: <?php echo $car ?></li>
                    <li>...</li>
                </ul>
            </div>
        <?php
    }
?>

</body>
</html>