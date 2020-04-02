<html>
    <head>
    </head>
    <body>
        	
    <?php
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['color'])) 
            {
                $uname = $_POST['uname'];
                echo $uname." favourite colors are <br/>";
                foreach($_POST['color'] as $selected) {
                echo "<li>$selected</li>\n";
            }
 
        }
        else
        {
            echo "<b>please select  one color.</b>";
        }
        }
    ?>

    </body>
</html>