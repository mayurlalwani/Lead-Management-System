 <div class="grid_3 sidebar alpha">
            
            		<div class="content-box">
                    
                    	<div class="content-header">
                        
                        	<h3>Side Content</h3>
                        
                        </div><!--/content-header-->
                    
                    	<h4>News</h4>
                        
                        <ul>
                       
                            
                            <?php 
                            
                            
                            $q = mysqli_query($GLOBALS["___mysqli_ston"], "select * from news where newsid = 1") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
                            
                            $news = mysqli_fetch_row($q);
                            
                            
                            echo $news[1];
                            
                            
                            echo "Update on " . $news[2];
                            
                            ?>
                            
                         
                        </ul>
                        
                       
                    
                    </div><!--/content-box-->
                    
                
            
            </div>