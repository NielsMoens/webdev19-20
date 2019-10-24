
    <!-- mijn versie -->
    <?php
    $new_content ='';
        if(isset($_POST["item"])){
            $new_content ='';
            foreach ($_POST["item"] as $row) {
                // opdeze manier ga je newcontent altijd overschrijven
                // $new_content = implode(',', $row);
                $new_content = $new_content . implode(',', $row);
                //of deze korte manier
                $new_content .= implode(',', $row);
                $new_content .= "\n";
            }
            file_put_contents('users.csv', $new_content);
        }
    ?>

    <!-- post naar zijn eigen -->
    <form method= "POST"> 
    <button type="submit">save</button>

    <?php
    $string_users = file_get_contents('users.csv');

    $arrayusers = explode("\n", $string_users);
    foreach ($arrayusers as $key => $row) {
        $array_row = explode(',', $row);
        echo '<div>';
        foreach ($array_row as $col) {
            // een name="items[]" tag toevoegen zodat je meerdere kan opslaan als 1lijst 
            echo '<input type="text" value="'. $col . '"name="item['. $key .'][]">'; 
        }
        echo '</div>';
    }
    ?>
    <button type="submit">save</button>
    </form>

     <!-- //MIJN VERSIE 
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
    
    ?> -->

    
