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
    if(!isset($_SESSION['index']))
        $_SESSION['index'] = rand(1,100);
      
        for($i = 0; $i < 20; $i++){
            
            for($i = 0; $i < 20; $i++){
            echo '<h1>"'.$_SESSION['index'].'"</h1>';
            }
        }

       
    ?>
</body>
</html>