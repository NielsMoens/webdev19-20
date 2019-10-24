<?php
if(isset($_COOKIE['name'])){
    header('location:hallo.php');
    exit;
    
}
?>
<html>

<head>
    <title>Set Cookie Data</title>
</head>

<body>
    <form action="hallo.php" method="post">
        Please enter your first name:
        <input type="text" name="name"><br><br>

        <button type="submit">verstuur</button>
    </form>
</body>

</html>