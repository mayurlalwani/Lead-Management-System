
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <title>Logged In</title>
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
                    
                    	<h3>Main Content box</h3>
                    
                    </div>
                     <div class="notice">
                        
                        	Alert! This is a yellow box
                        
                        </div>
                        
                        <div class="error">
                        
                        	Here's an error message
                        
                        </div>
                        
                        <div class="success">
                        
                        	Settings saved.
                        
                        </div>
    
                        <table class="tablesorter" cellspacing="1">             
                            <thead> 
                                <tr> 
                                    <th><span>first name</span></th> 
                                    <th><span>last name</span></th> 
                                    <th><span>age</span></th> 
                                    <th><span>total</span></th> 
                                    <th><span>discount</span></th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr> 
                                    <td>peter</td> 
                                    <td>parker</td> 
                                    <td>28</td> 
                                    <td>$9.99</td> 
                                    <td>20%</td> 
                                </tr> 
                                <tr> 
                                    <td>john</td> 
                                    <td>hood</td> 
                                    <td>33</td> 
                                    <td>$19.99</td> 
                                    <td>25%</td> 
                                </tr> 
                                <tr> 
                                    <td>clark</td> 
                                    <td>kent</td> 
                                    <td>18</td> 
                                    <td>$15.89</td> 
                                    <td>44%</td> 
                                </tr> 
                                <tr> 
                                    <td>bruce</td> 
                                    <td>almighty</td> 
                                    <td>45</td> 
                                    <td>$153.19</td> 
                                    <td>44%</td> 
                                </tr> 
                                <tr> 
                                    <td>bruce</td> 
                                    <td>evans</td> 
                                    <td>22</td> 
                                    <td>$13.19</td> 
                                    <td>11%</td> 
                                </tr> 
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