
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <title>Logged In</title>
   <?php 

   include 'class/connection.php';
   
   connect();
   
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
                    
                    	<h3>Sold Files By Date</h3>
                    
                    </div>


                            <form method="post"  action="rpt_datesold1.php" target="xyz">

                                <div class="lileft">
                               

                                        <label>Start Date</label>
                                        <input type="text"  name="sdate"  class="required"  style="border-color: #000000" >
                                            </div>

                                          
                                                <label>End Date</label>
                                                <input type="text" name="edate"  class="required" style="border-color: #000000">
                                            </div>


                                            <input type="submit" value="Get Report" style="border-color: #000000">

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