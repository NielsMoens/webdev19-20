
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- zijn versie -->
    <?php
    // $string_users = file_get_contents('users.csv');
    // $arrayusers = explode("\n", $string_users);
    // print_r($arrayusers);
    // foreach ($arrayusers as $row) {
    //     echo '<li>'.$row;
    //     # code...
    // }
    ?>

    <!-- //MIJN VERSIE -->
    <?php
        $csv = array_map('str_getcsv', file('users.csv'));
        array_shift($csv);
        print_r($csv);
        
        // for($i=0; $i<count($csv); $i++){
        //     echo $csv[$i];
        //     for($o=0; $o<count($csv); $o++){
        //         echo $csv[$o];
        //     }
        // }
        foreach ($csv as $row) {
            include './contents/row.php';
            foreach ($csv as $col) {
                include './contents/col.php';
            }
        }
    
    ?>
    <form method="post">
        <input name= "btn" type="submit" value="Submit">
    </form>
</body>
</html>
