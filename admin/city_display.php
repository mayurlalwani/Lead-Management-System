<?php 

require 'class/connection.php';
connect();

$msg ="";
if(isset($_GET['did']))
{
    
   
    
    $did = $_GET['did'];
    
  $dq =   mysqli_query($GLOBALS["___mysqli_ston"], "delete from city where city_id = $did ") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    
  if($dq)
  {
      $msg = "   <div class='success'>Row Delete </div>";
  }
}

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
                    
                    	<h3>City Display</h3>
                    
                    </div>
                 
                     <?php 
                     
                     echo $msg;
                     ?>
    
                        <table class="tablesorter" cellspacing="1">             
                            <thead> 
                                <tr> 
                                    <th><span>ID</span></th> 
                                    <th><span>City Name</span></th> 
                                    <th><span>State Name</span></th> 
                                    <th><span>Edit</span></th> 
                                    <th><span>Delete</span></th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                
                                <?php 
                                $q = mysqli_query($GLOBALS["___mysqli_ston"], "select * from city") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
                                
                                while($data=  mysqli_fetch_row($q))
                                {
                                    
                                    echo "<tr>";
                                    
                                    echo "<td>$data[0]</td><td>$data[1]</td><td>$data[2]</td> ";
                                    echo "<td>Edit</td><td><a href='?did=$data[0]'>Delete</a></td>";
                                    echo "</tr>";
                                    
                                    
                                } 
                                   
                                
                                
                                ?>
                               
                                
                            </tbody> 
                        </table>
                        
                       
                        
                     
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