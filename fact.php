<html>
    <head>
    </head>
    <body>
        <form action="" method="post" >            
            	
                <b>Enter your number:</b><input type="number" name="a" id="a" />           
            	<input type="submit" name="submit" id="submit" value="Submit" />		
	    </form>
        <?php
    
           $a=$_POST['a'];
           $fact = 1;
            
           for ($i=$a; $i>=1; $i--)
           {
               $fact= $fact * $i;
           }
            
           echo "factorial=".$fact;
        
            
        
         ?>


       

    </body>
</html>