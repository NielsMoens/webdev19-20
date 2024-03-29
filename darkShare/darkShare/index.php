<?php 
$view = 'list';
if ( isset($_GET['view'])) {
    $view = $_GET['view'];
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DarkShare</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<h1>DarkShare</h1>

<section>
    <form> <!-- TODO: ga op zoek naar de correcte attributen voor het opladen van bestanden via een form -->
        <input type="file" name="my_file" class="input"> 
        <input type="submit" value="Share" class="btn">
    </form>
</section>
<section class="">
    <h2>Shared files</h2>
    
    <div class="filter">
        <form>
            <input type="text" name="q">
            <input type="submit" value="Search" class="btn">
        </form>
        <div class="view_switch">

        <?php
            
            $viewContent = "";
            $viewContent = $_GET['view'];
            

            ?>

            <a href="?view=list">list</a>
            <a href="?view=grid">grid</a>
        </div>
    </div>
    <div class="file-list <?php echo $view; ?>">

        <!-- TODO: Maak onderstaande lijst dynamisch -->
        <?php


            // human filesize function

        function human_filesize($bytes, $decimals = 2) {
            $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
            $factor = floor((strlen($bytes) - 1) / 3);
            return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
        }
        $uploadedFiles = array_slice(scandir('uploads'), 2); 

            //foreach loop

        foreach ($uploadedFiles as $file) {

            // save path info
            $pathInfo = pathinfo($file);
            $file_src = 'uploads/' . $file;
            $file_size = filesize($file_src);
            
            // if text file
            if(in_array($pathInfo['extension'], ['jpg', 'png'])) {
                echo '<div class="file"><div class="icon icon-image"><img src=""></div><div class="file_info">' . $pathInfo['basename'] .'</div><div class="buttons"><a href="edit.php?file=" class="btn" download="">Edit</a><a href="uploads/'.$pathInfo['basename'].'" class="btn" download="">Download</a>
                </div></div>';
            }else {
                echo '<div class="file"><div class="icon icon-'. $pathInfo['extension'] .'"><span>'. $pathInfo['extension'] .'</span></div><div class="file_info">' . $pathInfo['basename'] .'</div><div class="buttons"><a href="edit.php?file=" class="btn" download="">Edit</a><a href="uploads/'.$pathInfo['basename'].'" class="btn" download="">Download</a>
            </div></div>';
        }
            //if jpg file

            
            

        }
        
        ?>
        <!--
        <div class="file">
            <div class="icon icon-image">
                <img src="uploads/image.jpg">
            </div>
            <div class="file_info">   
                <strong>pexels-photo-450271.jpg</strong><br>
                144.64kB                                
            </div>
            <div class="buttons">
                <a href="uploads/image.jpg" class="btn" download="">Download</a>
            </div>
        </div> 
        <div class="file">
            <div class="icon icon-txt">
                <span>txt</span>
            </div>
            <div class="file_info">   
                <strong>license.txt</strong><br>
                19.47kB
            </div>
            <div class="buttons">
                <a href="edit.php?file=license.txt" class="btn" download="">Edit</a>
                <a href="uploads/license.txt" class="btn" download="">Download</a>
            </div>
        </div> 
        <div class="file">
            <div class="icon icon-pdf">
                <span>pdf</span>
            </div>
            <div class="file_info">   
                <strong>BAP-MMP-1-briefing.pdf</strong><br>
                9.21MB                                
            </div>
            <div class="buttons">
                <a href="uploads/BAP-MMP-1.pdf" class="btn" download="">Download</a>
            </div>
        </div> 
        -->
    </div>
    <div class="paging">
        <a href="?page=1" class="current">1</a>
        <a href="?page=2">2</a>
        <a href="?page=3">3</a>
        <a href="?page=4">4</a>
        <a href="?page=5">5</a>
    </div>
</section>

</body>
</html>