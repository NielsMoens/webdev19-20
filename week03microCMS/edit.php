<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- //MIJN VERSIE -->
    <?php
    $current_content = $_GET['page'];
    if(isset($_GET['page'])){
    $current_page = $_GET['page'];
    }
    if(isset($_POST['btn'] )){
        file_put_contents('contents/'.$current_content, $_POST['new_content']);
    }

    ?>
    
    <form method="post">
        <textarea name="new_content" cols="100" rows="50">
            <?php echo file_get_contents('contents/'. $current_content) ?>;
        </textarea>
        <input name= "btn" type="submit" value="Submit">
    </form>
</body>
</html>