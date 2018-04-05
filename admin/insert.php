
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
                        
                        <form action="#" method="post">
                        
                        	<fieldset>
                            
                            <legend>Example Form</legend>
                            
                            <div>
                                 <label for="name">Text Input:</label>
                                 <input type="text" name="name" id="name" value="" tabindex="1" />
                            </div>
                        
                            <div>
                        
                                 <label for="radio-choice-1">Choice 1</label>
                                 <input type="radio" name="radio-choice-1" id="radio-choice-1" tabindex="2" value="choice-1" />
                        
                                 <label for="radio-choice-2">Choice 2</label>
                                 <input type="radio" name="radio-choice-2" id="radio-choice-2" tabindex="3" value="choice-2" />
                            </div>
                        
                            <div>
                                <label for="select-choice">Select Dropdown Choice:</label>
                                <select name="select-choice" id="select-choice">
                                    <option value="Choice 1">Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="textarea">Textarea:</label>
                                <textarea cols="40" rows="8" name="textarea" class="markItUp"></textarea>
                            </div>
                            
                            <div>
                                <label for="checkbox">Checkbox:</label>
                                <input type="checkbox" name="checkbox" id="checkbox" />
                            </div>
                        
                            <div>
                                <button class="button" title="" type="button"><span><span>Submit</span></span></button>
                                
                                <button class="button-yellow" title="" type="button"><span><span>Submit</span></span></button>
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