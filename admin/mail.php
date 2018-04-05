<?php 


require 'class/connection.php';
connect();

$msg ="";
if($_POST)
{

    $subject = $_POST["sub"];
    $body = $_POST["body"];
   $q =  mysqli_query($GLOBALS["___mysqli_ston"], "select email from registration") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    
   
   
   while($emailist = mysqli_fetch_row($q))
   {
       
       mail($emailist[0], $subject, $body);
       
    
       }
   
   
   
   
   
   
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <title></title>
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
                    
                    	<h3>Mail</h3>
                    
                    </div>
    
                  
                    
                        
                    
                        
                      <?php 
                      
                      echo $msg;
                      ?>
                        
                        <form  method="post" id="myform">
                        
                        	<fieldset>
                            
                            <legend>Mail to All</legend>
                            
                            <div>
                                
                               Subject  <input type="text" name="sub" class=" required" id="name" value=""  />
                            </div>
                        
                             <div>
                                <label for="textarea">Body:</label>
                                <textarea cols="40" rows="8" name="body" class="markItUp required"></textarea>
                            </div>

                        
                            
                           
                            <div>
                                <button class="button" title="" type="submit"><span><span>Submit</span></span></button>
                                
                                       </div>
                            
                            </fieldset>
                            
                        </form>
                        
                     
                
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