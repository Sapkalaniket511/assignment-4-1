<html>
    <head>
    </head>
    <body>
        <form action="" method="post" >            
            	<b>Enter your choice:</b><input type="text" name="choice" id="choice" />
                <b>Enter your number 1:</b><input type="number" name="a" id="a" />
                <b>Enter your number 2:</b><input type="number" name="b" id="b" />           
            	<input type="submit" name="submit" id="submit" value="Submit" />		
	    </form>
        <?php
            $choice= $_POST['choice'];
            $a= $_POST['a'];
            $b= $_POST['b'];
            
            
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