<?php 

require 'class/connection.php';
connect();


function mysql_table_field_names( $table_name )
{
    
 // This Function is used for Get List of Tables Fields 
   // You have to pass table name a
	$total_fields = (int) (($___mysqli_tmp = mysqli_num_fields( mysqli_query($GLOBALS["___mysqli_ston"],  "SELECT * FROM $table_name"))) ? $___mysqli_tmp : false);
	$names = array();
        
	for ( $i = 0; $i < $total_fields; $i++ )
        {
                $names[] = ((($___mysqli_tmp = mysqli_fetch_field_direct( mysqli_query($GLOBALS["___mysqli_ston"],  "SELECT * FROM $table_name"), 0)->name) && (!is_null($___mysqli_tmp))) ? $___mysqli_tmp : false);
                echo "<br><tr> <input type='checkbox' name='chk1[]' value='$names[$i]'> </td> <td>  $names[$i]</td></tr>";
        }
	return $names;
        
}

?>



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
   <?php 
   
   include 'include_theme/head_scripts.php';
   ?>
</head>

<body>  
    <?php 
    
       include 'include_theme/top_menu.php';
    ?>

<div class="main">

    <div class="container_12">
    
    	<div class="grid_12">
        
        	
            <?php 
            
                include 'include_theme/welcome.php';
            
                include 'include_theme/sidebar.php';
            
            ?>
           <!--/sidebar-->
            
            <div class="grid_9 content omega">
            
            	<div class="content-box">
                
                	<div class="content-header">
                    
                    	<h3>List Of USA Leads</h3>
                    
                    </div>
                 
                  
                        
                                
                             
                             
                    <form method="post" action="12.php">
    



<?php
 mysql_table_field_names("leads_usa");  
?>
    <br>
    <input type="submit">  
                             
                       
                        
                     
                </div><!--/content-box-->
            
            </div><!--/content-->
    
    	</div><!--/grid-12-->
        
        <div class="clear"></div>
    
    </div><!--/container-->
    
</div><!--/main-->


<?php 

include 'include_theme/footer.php';

?>

</body>
</html>