<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>hello there</h1>
        <nav>
            
            <?php 
                $content = scandir("contents");
                $current_page = '';
                if(isset($_GET['page'])){
                    $current_page = $_GET['page'];
                }
                
                
                foreach($content as $items){
                    $item_path = 'contents/' . $items;
                    if(is_file($item_path)){
                        echo '<a href="?page=' . $items . '">' . $items . '</a>';
                        if (!$current_page) {
                            $current_page = $items;
                        }
                    }
                }
                if($current_page){
                    echo file_get_contents('contents/'.$current_page);
                    echo '<a href="edit.php?page='.$current_page .'">Edit page</a>';
                }
                else{
                    echo '<p>klik het juiste aan</p>';
                }
            ?>

            
            
        </nav>

        <div class="content">
            <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ration
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ratione.
                >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ratione.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda  sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ratione.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ration
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ratione.
                >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ratione.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ratione.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ration
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ratione.
                >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ratione.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aliquam facere sit. Libero officia harum quos fugit, assumenda eaque sapiente quas consectetur earum? Explicabo provident dolor incidunt consequatur quia ratione.
            </p> -->
        </div>
    </header>

</body>

</html>