
<div class="headwrap">

	<div class="container_12 header">
    	
        <div class="grid_8 logo">
        
        	<h1>Lead Management System</h1>
            
        <!--    <p class="viewsite"><a href="#">View Site</a></p> -->
        
        </div><!--/logo-->
        
        <div class="grid_4 last h-details">
        
        	<div class="logged-in">
            
            	<a href="logout.php" class="logout">Logout</a>
                Logged in as <a href="#"><?php echo $_SESSION["buyer"]; ?></a>
            
            </div><!--/logged-in-->
        
        </div><!--/hdetails-->
        
        <div class="container_12 nav">
        
        	<div id="smoothmenu1" class="ddsmoothmenu">
                <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Buy</a>
                  <ul>
                     
                      <li><a href="buyfromseller.php">From Seller</a></li>
                    
                 
                  </ul>
                </li>
                <li><a href="#">My Purchase </a>
                  <ul>
                      <li><a href="my-file-pur.php">My Lead File </a></li>
                      <li><a href="my-lead-pur.php">My Leads </a></li>
                    
                    
                 
                  </ul>
                </li>
               
               <!-- <li><a href="#">Item 3</a></li> -->
              
                <li><a href="#">Setting</a>
                  <ul>
                  <li><a href="changepass.php">Change Password</a></li>
                  <li><a href="logout.php">Logout</a></li>
                 
                  </ul>
                </li>
                </ul>
                <br style="clear: left" />
          	</div>
        
        </div><!--/nav-->
        
    </div><!--/header-->

</div><!--/headwrap-->