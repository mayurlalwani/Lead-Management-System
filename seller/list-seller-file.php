<?php 

require 'class/connection.php';
connect();

$msg ="";
if(isset($_GET['delete']))
{
    
   
    
    $did = $_GET['delete'];
    
  $dq =   mysqli_query($GLOBALS["___mysqli_ston"], "delete from leads_file where leadfileid = '{$did}' ") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    
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
    <script type="text/javascript">// <![CDATA[
function confirmDelete(delUrl) {
    if (confirm("Are you sure you want to delete")) {
        document.location = delUrl;
        
     
    }
}
</script>
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
                    
                    	<h3>My Lead File</h3>
                    
                    </div>
                 
                     <?php 
                     
                     echo $msg;
                     ?>
    
                        <table class="tablesorter" cellspacing="1">             
                            <thead> 
                                <tr> 
                                    <th><span>ID</span></th> 
                                    <th><span>Name</span></th> 
                              
                                          <th><span>Amount</span></th> 
                                                <th><span>Description</span></th> 
                                    
                                    <th><span>Delete</span></th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                
                                <?php 
                                
                                $uid = $_SESSION["uid"];
                                $q = mysqli_query($GLOBALS["___mysqli_ston"], "select * from leads_file where  uid = '{$uid}' ") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
                                
                                while($data=  mysqli_fetch_row($q))
                                {
                                    
                                    echo "<tr>";
                                    
                                    echo "<td>$data[0]</td><td>$data[2]</td> ";
                                    
                                    echo "<td>$data[4]</td><td>$data[5]</td>";
                                   // echo "<td><a href=javascript:confirmDelete('?did=$data[0]')>Delete</a></td>";
									$did=$data[0];
									echo $did;
									echo '<td><a href="list-seller-file.php?delete='.$did.'"> delete1 </a></td> ';
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