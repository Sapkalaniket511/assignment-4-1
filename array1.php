<html>
    <head>
    </head>
    <body>
        <form action="" method="post" >            
            	
                <b>Enter month you want to delete:</b><input type="text" name="a" id="a" />           
            	<input type="submit" name="submit" id="submit" value="Submit" />		
	    </form>
        <?php
           $delete = $_POST['a'];
           
           $months = array('jan', 'feb', 'march', 'april', 'may','june','july','aug','sep','oct','nov','dec'); 
           foreach (array_keys($months, $delete) as $key)
            {
               unset($months[$key]);
           }
            var_dump($months);
            
        
         ?>


       

    </body>
</html>