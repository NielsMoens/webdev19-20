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
    require_once 'data.php';
    // echo '<pre> '.var_dump($cars). '</pre>';
    // echo '<section class="container" style="display:flex ; flex-wrap:wrap"; justify-content>';
    // foreach ($cars as $car){
    //     echo '<div class="cars" style="width:30%; height: 30%; border: 10px solid pink" >
        
    //     </div>';
    // }
    // echo '</section>';
    // EcHo "<br>loading done";
    


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