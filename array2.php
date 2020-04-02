<html>
    <head>
    </head>
    <body>
        
        <?php
           
           
           $city = ["tokyo","mexico city","new york city","mumbai","seoul","shanghai","lagos","buenos aires","cairo","london"];
           $length = count($city);
           $i = 0;
           echo "array=";
           while ($i < $length)
           {
               echo $city[$i] .",";
               $i++;
           }
           sort($city);
           echo "\n<br>\n";
           echo "1st sorted list";
           echo "\n<ul>\n" ;
           
           foreach($city as $sort){
             echo "<li>$sort</li>\n";
           }
           echo "</ul>" ;
           array_push($city,"los angeles","calcutta","osaka","beljing");
           echo "2nd sorted list";
           sort($city);
           echo "\n<ul>\n";
           foreach($city as $sort)
           {
               echo "<li>$sort</li>\n";

           }
           echo "</ul>"

         ?>


       

    </body>
</html>