<html>
    <head>
    </head>
    <body>
        <form action="" method="post" >            
            	
                <b>Enter your number:</b><input type="number" name="a" id="a" />           
            	<input type="submit" name="submit" id="submit" value="Submit" />		
	    </form>
        <?php
            $a= $_POST['a'];
            if($a>0)
            {
                echo $a ."positive number";
            }
            elseif($a<0)
            {
                echo $a ."this is negative number";
            }
            elseif($a==0)
            {
                echo $a ."this is zero";
            }
            else{
                echo $a ."enter the number";
            }
            
        
         ?>


       

    </body>
</html>