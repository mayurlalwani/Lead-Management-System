<?php


require 'class/connection.php';

connect();
if($_POST)
{
    
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$add = $_POST['add'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$atype=$_POST['atype'];
$country=$_POST['country'];

$q="INSERT INTO `registration`(`uname`, `pwd`, `fname`, `lname`, `email`, `phone`, `add`, `city`, `state`, `country`, `zip`, `atype`) VALUES ('{$uname}','{$pwd}','{$fname}','{$lname}','{$email}','{$phone}','{$add}','{$city}','{$state}','{$country}','{$zip}','{$atype}')";

$q = mysqli_query($GLOBALS["___mysqli_ston"], $q) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
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
                
                	<h3><center> Register </center></h3>
                
                </div>
                
                
               
                	<p>Please fill in the following form to Register</p>
                         
                        <form method="post">
                             <?php 
                
               
                ?>
                	<div class="lileft">
                        <label>Username</label>
                        <input type="text" name="uname" style="border-color: #000000">
                    </div>
                    
					<div class="liright">
                        <label>Password</label>                    
                        <input type="password" style="border-color: #000000" name="pwd">
                    </div><div class="lileft">
                       
                        <label>First Name</label>
                        <input type="text" name="fname" style="border-color: #000000">
                    </div>
                            
                            <div class="lileft">
                        <label>Last Name</label>
                        <input type="text" name="lname" style="border-color: #000000">
                    </div>
                            <div class="lileft">
                        <label>Email</label>
                        <input type="text" name="email" style="border-color: #000000">
                    </div>
                            <div class="lileft">
                        <label>Phone</label>
                        <input type="text" name="phone" style="border-color: #000000">
                    </div>
                            <div class="lileft">
                        <label>Address</label>
                        <input type="text" name="add" style="border-color: #000000">
                    </div>
                            <div class="lileft">
                        <label>City</label>
                        <input type="text" name="city" style="border-color: #000000">
                    </div>
                            <div class="lileft">
                        <label>State</label>
                        <input type="text" name="state" style="border-color: #000000">
                    </div>
                            <div class="lileft">
                        <label>Zip</label>
                        <input type="text" name="zip" style="border-color: #000000">
                    </div>
                            <div class="lileft">
                        <label>Country</label>
                        <input type="text" name="country" style="border-color: #000000">
                    </div>
                            <div class="lileft">
                        <label>Account Type</label>
                        
                            <select name="atype" style="border-color: #000000" >
                                    <option value="">select</option>
                                    <option value="Buyer" name="atype">Buyer</option>
                                    <option value="Seller" name="atype">Seller</option>
                                    <option value="Affiliate" name="atype">Affiliate</option>
                                    
                                </select>
                    </div>
                    
                            <input type="submit" value="Register" style="border-color: #000000">
                    
                        </form>
                    <div class="clear"></div>
                	            
            </div>
    
    	</div>
    
    </div>

</div>

</body>
</html>