<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
    session_start();

    if(!isset($_SESSION['index'])) {
        $_SESSION['index'] = [];
        $_SESSION['numbers'] = range(0, 45);
        shuffle($_SESSION['numbers']);
        
        $randomElement = array_rand($_SESSION['numbers']); 
        array_push($_SESSION['index'], $randomElement);
        unset($_SESSION['numbers'][$randomElement]);
         
    } else if (sizeof($_SESSION['index']) < 6) { 
        $randomElement = array_rand($_SESSION['numbers']); 
        array_push($_SESSION['index'], $randomElement);
        unset($_SESSION['numbers'][$randomElement]);
    }

    foreach ($_SESSION['index'] as $element)
        echo '<h1>"'.$element.'"</h1>';
    
    ?>
</body>
</html>
