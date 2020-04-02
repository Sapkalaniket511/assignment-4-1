<html>
    <head>
    </head>
    <body>
        	<?php
                $city=array(
                 "japan" => "tokyo",
                 "Mexico" => "mexico city",
                "usa" => "new york city",
                "india" => "mumbai",
                "korea" => "seoul",
                "china" => "shanghai",
                "nigeria" => "lagos",
                "argentina" => "buenos aires",
                "egypt" => "cairo",
                "uk" => "london"
                 );
                if(!isset($_POST['submit'])){
            ?>
 
            <form method="post" action="">
            <p>select city:</p>
            <select name="city">
 
            <?php 
                foreach($city as $sel){
                echo "<option value=".$sel.">$sel</option>\n";
                }
            ?>
 
            </select> 
            <input type="submit" name="submit" value="submit">
            </form>
 
            <?php
                }else
                {
        
                    $cities=$_POST['city'];
                    $country=array_search($cities, $city);
                    echo "<p>$cities is in $country.</p>" ;
 
                }
            ?>
 


    </body>
</html>