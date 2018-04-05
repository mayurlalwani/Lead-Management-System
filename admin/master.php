
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
                        
                        <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

                        <h2>Header Level 2</h2>
                                   
                        <ol>
                           <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                           <li>Aliquam tincidunt mauris eu risus.</li>
                        </ol>
                        
                        <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>
                        
                        <h3>Header Level 3</h3>
                        
                        <ul>
                           <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                           <li>Aliquam tincidunt mauris eu risus.</li>
                        </ul>
                        
                        <pre><code>
                        #header h1 a { 
                            display: block; 
                            width: 300px; 
                            height: 80px; 
                        }
                        </code></pre>
                
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