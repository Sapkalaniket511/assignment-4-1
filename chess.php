<html>
    <head>
    </head>
    <body>
  
        <table width="500px" cellspacing=0px border=2px>
        <?php  
            for($row=1;$row<=8;$row++)  
            {  
	        
	            for($column=1;$column<=8;$column++)  
        	        {
	                    $total=$row+$column;
		                if($total%2==0)
		                {  
			                echo "<td height=40px width=35px bgcolor=white></td>";  
		                }         
		                else  
		                {  
			                echo "<td height=40px width=35px bgcolor=black></td>";  
		                }  
	                }  
	            echo "</tr>";  
            }  
        ?>  
</table>

       

    </body>
</html>