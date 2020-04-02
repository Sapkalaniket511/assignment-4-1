<html>
    <head>
    </head>
    <body>
        
        <?php
            $choice= "Add";
            $a= 23;
            $b= 34;
            
            
            switch($choice)
            {
                case "Add":
                    $Addition=$a+$b;
                    echo "Addition".$Addition;
                    break;
                case "sub":
                    $substraction=$a-$b;
                    echo "substraction".$substraction;
                    break;
                case "mul":
                    $multiplication=$a*$b;
                    echo "multi".$multiplication;
                    break;
                case "div":
                    $division=$a/$b;
                    echo "division".$division;
                    break;
                default:
                    echo "wrong choice";         
            }
       
            
            
        
         ?>


       

    </body>
</html>