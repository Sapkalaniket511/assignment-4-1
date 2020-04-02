<html>
    <head>
    </head>
    <body>
        <form action="" method="post" >            
            	<b>Enter the name:</b><input type="number" name="units" id="units" />            
            	<input type="submit" name="submit" id="submit" value="Submit" />		
	    </form>
        <?php
            $result = '';
            $units = $_POST['units'];
        
            $result = calculate($units);
            
            function calculate($units) 
            {
            if($units<=50)
            {
                    $bill=$units*3.50;
            }
            elseif($units>50 && $units<=100)
            {
                $first=50*3.50;
                $remaining=$units-50;
                $next=$remaining*4;
                $bill=$first+$next;
            }
            elseif($units>100 && $units<=200)
            {
                $first=50*3.50 + 100*4;
                $remaining=$units-150;
                $next=$remaining*5.20;
                $bill=$remaining+$first;
            }
            else
            {
                $first=50*3.50+100*4+100*5.20;
                $remaining=$units-250;
                $next=$remaining*6.50;
                $bill=$remaining+$first;
            }    
            return $bill;
        
        
        
        
        
        
            }
            
        ?>


        <?php echo 'total bill =<br />' . $result; ?>

    </body>
</html>