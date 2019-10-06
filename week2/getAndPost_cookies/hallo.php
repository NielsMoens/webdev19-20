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
   $cookie_user= "user";

    if(!isset($_COOKIE[$cookie_user])) {
    echo "Cookie named '" . $cookie_user. "' is not set!<br>";
    } else {
    echo "Cookie '" . $cookie_user . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_user];
    }
    
  if( ( isset($_POST['name'])) )
  {
   $name = $_POST['name'];
  setcookie($cookie_user, $name, time()+(3600*24*365), "/");
  }

  
  echo '<h1> Hallo :' . $name . '</h1>';
?>
</body>
</html>

