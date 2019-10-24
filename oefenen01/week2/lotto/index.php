<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lotto</title>
    <link rel="stylesheet" href="lotto.css">
</head>
<body>

<h1>Lottotrekking<br><?php echo date("l d F") ?> </h1>
    <?php 

    function get_new_number($numbers){
        
        do {
            $new = rand(1, 6);
            
        }
        while(in_array($new, $numbers) !== false);
        
        return $new;
    }
    // var_dump($numbers);

//Start session
session_start();

$numbers = [];
// Get previous generated names from session and cast the string to array
if (isset($_SESSION['lottoNumbers'])) {
    $numbers = (array) $_SESSION['lottoNumbers'];
}

if(count($numbers) < 6) {
    var_dump($numbers);
    $new = get_new_number($numbers);
    array_push($numbers, $new);
    $_SESSION['lottoNumbers'] = $numbers;
    
}

    echo '<div class="result">';
    foreach($numbers as $number) {
        // var_dump($numbers);
    echo '<div class="number"><div>' . $number . '</div></div>';
    }
    echo '</div>';
    ?>
</body>
</html>