<?php 

require 'class/connection.php';
                     
                     connect();

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
                    
                    	<h3>My  Lead File Purchase </h3>
                    
                    </div>
                 
                
                        <table class="tablesorter" cellspacing="1">             
                            <thead> 
                                <tr> 
                             
                      <th><span>File Name</span></th> 
                              
                                          <th><span>Amount</span></th> 
                                                <th><span>Description</span></th> 
                                       <th><span>Date/Time</span></th> 
                                    
                                  
                                </tr> 
                            </thead> 
                            <tbody> 
                                
                                <?php 
                     
                                   $uid = $_SESSION["uid"];
                                $q = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT
    `leads_file`.`leadfilename`
    , `leads_file`.`sellamount`
    , `sold_files`.`solddate`
    , `leads_file`.`desc`
    , `registration`.`uid`
FROM
    `leads_file`
    INNER JOIN `lms`.`sold_files` 
        ON (`leads_file`.`leadfileid` = `sold_files`.`fileid`)
    INNER JOIN `registration` 
        ON (`registration`.`uid` = `sold_files`.`buyerid`) where `registration`.`uid` = '{$uid}' 
         ") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
                                
                                while($data=  mysqli_fetch_row($q))
                                {
                                    
                                    echo "<tr>";
                                    
                                    echo "<td>$data[0]</td>";
                                    echo "<td>$data[1]</td>";
                                    
                                    echo "<td>$data[3]</td>";
                                    echo "<td>$data[2]</td>";
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