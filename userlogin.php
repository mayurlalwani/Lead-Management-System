<?php
$msg="";
if(isset($_GET['s']))
{
    
    $msg =" <div class='error'>
                    
                       Invalid Details
                    </div>";
    
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <title>Log In</title>
    
    <!-- Framework CSS -->
    <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
    
    <!-- Site Specific CSS -->
    <link rel="stylesheet" href="css/theme.css" type="text/css" media="screen, projection" />
    
    <!--[if IE]><link rel="stylesheet" href="css/frame/ie.css" type="text/css" media="screen, projection"><![endif]-->
    
    <script language="javascript" type="text/javascript" src="js/jquery-latest.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/ddsmoothmenu.js"></script>
    <script language="javascript" type="text/javascript" src="js/tabs.js"></script>
    <script type="text/javascript" src="js/jquery.markitup.pack.js"></script>
    <script type="text/javascript" src="js/sets/default/set.js"></script>
    <script type="text/javascript" src="js/facebox.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    <link rel="stylesheet" type="text/css" href="css/facebox.css" />
    
    <script type="text/javascript">
	<!--
	$(document).ready(function()	{
		// Add markItUp! to your textarea in one line
		// $('textarea').markItUp( { Settings }, { OptionalExtraSettings } );
		$('.markItUp').markItUp(mySettings);
		
		// You can add content from anywhere in your page
		// $.markItUp( { Settings } );	
		$('.add').click(function() {
			$.markItUp( { 	openWith:'<opening tag>',
							closeWith:'<\/closing tag>',
							placeHolder:"New content"
						}
					);
			return false;
		});
		
		// And you can add/remove markItUp! whenever you want
		// $(textarea).markItUpRemove();
		$('.toggle').click(function() {
			if ($(".markItUp.markItUpEditor").length === 1) {
				$(".markItUp").markItUpRemove();
				$("span", this).text("get markItUp! back");
			} else {
				$('.markItUp').markItUp(mySettings);
				$("span", this).text("remove markItUp!");
			}
			return false;
		});
	});
	-->
	</script>

    <script type="text/javascript" id="js">$(document).ready(function() {
		// call the tablesorter plugin
		$("table").tablesorter({
			// sort on the first column and third column, order asc
			sortList: [[0,0]]
		});
	}); </script>
    
    <script type="text/javascript">

		ddsmoothmenu.init({
			mainmenuid: "smoothmenu1", //menu DIV id
			orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
			classname: 'ddsmoothmenu', //class added to menu's outer DIV
			contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
		})
		
	</script>
    
    <script language="javascript" type="text/javascript">

		$(document).ready(function(){
		$(".sidebar li img").fadeTo("fast", 0.6); // This sets the opacity of the thumbs to fade down to 60% when the page loads
		
		$(".sidebar li img").hover(function(){
		$(this).fadeTo("fast", 1.0); // This should set the opacity to 100% on hover
		},function(){
		$(this).fadeTo("fast", 0.6); // This should set the opacity back to 60% on mouseout
		});
		$("tr:nth-child(even)").addClass("even");
		$('a[rel*=facebox]').facebox() 
		});
	
	</script>

    
    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta3)/IE9.js"></script>
    <![endif]-->
    
</head>

<body class="login">

<div class="container_12">

	<div class="grid_6 prefix_3 suffix_3">
    
    	<div class="main login" style="width:auto; padding:20px;">
        
        	<div class="content-box">
            
            	<div class="content-header">
                
                	<h3><center> LMS User Login </center></h3>
                
                </div>
                
                
               
                	<p>Please fill in the following form to log in:</p>
                         
                        <form method="post" action="userlogincheck.php">
                             <?php
							 echo $msg;
               
                ?>
                	<div class="lileft">
                        <label>Email</label>
                        <input type="text" name="txt1" style="border-color: #000000">
                    </div>
                    
					<div class="liright">
                        <label>Password</label>                    
                        <input type="password" style="border-color: #000000" name="txt2">
                    </div>
                    
                            <input type="submit" value="Login" style="border-color: #000000">
                    
                        </form>
                    <div class="clear"></div>
                	            
            </div>
    
    	</div>
    
    </div>

</div>

</body>
</html>