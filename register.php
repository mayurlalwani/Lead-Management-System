<?php
$newvalue=null;
$emails=(isset($_POST['email'])?$_POST['email']:'');
$fnames=(isset($_POST['fname'])?$_POST['fname']:'');
$lnames=(isset($_POST['lname'])?$_POST['lname']:'');
$phones=(isset($_POST['phone'])?$_POST['phone']:'');
$addresss=(isset($_POST['add'])?$_POST['add']:'');
$countrys=(isset($_POST['country'])?$_POST['country']:'');
$citys=(isset($_POST['city'])?$_POST['city']:'');
$states=(isset($_POST['state'])?$_POST['state']:'');
$zips=(isset($_POST['zip'])?$_POST['zip']:'');

?>
<?php
require 'class/connection.php';

connect();

if (isset ($_POST['submit'])) 
	{
		if(!preg_match("/^[a-zA-Z0-9\_]{8,20}/", $_POST['pwd']))
		{
			echo '<script language="javascript">';
			echo 'alert("Please Enter Atleast 8 Characters In Password")';
			echo '</script>';
		}
		else if (!preg_match("/^[a-zA-Z]/", $_POST['fname']))
		{
			echo '<script language="javascript">';
			echo 'alert("Please Enter Only Characters In First Name")';
			echo '</script>';
		}
		else if (!preg_match("/^[a-zA-Z]/", $_POST['lname']))
		{
			echo '<script language="javascript">';
			echo 'alert("Please Enter Only Characters In Last Name")';
			echo '</script>';
		}
		else
		{
    $pwd = $_POST['pwd'];
	
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $add = $_POST['add'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $atype = $_POST['atype'];
    $country = $_POST['country'];

    $q = "INSERT INTO `registration`(`pwd`, `fname`, `lname`, `email`, `phone`, `add`, `city`, `state`, `country`, `zip`, `atype`) VALUES ('{$pwd}','{$fname}','{$lname}','{$email}','{$phone}','{$add}','{$city}','{$state}','{$country}','{$zip}','{$atype}')";

    $q = mysqli_query($GLOBALS["___mysqli_ston"], $q) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	

			$emails="";
			$fnames="";
			$lnames="";
			$phones="";
			$addresss="";
			$countrys="";
			$citys="";
			$states="";
			$zips="";

		echo '<script type="text/javascript">'; 
		echo 'alert("Registered Successfully");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';
		}
		
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



        <!-- Framework CSS -->
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />

        <!-- Site Specific CSS -->
        <link rel="stylesheet" href="css/theme.css" type="text/css" media="screen, projection" />

        <!--[if IE]><link rel="stylesheet" href="css/frame/ie.css" type="text/css" media="screen, projection"><![endif]-->

        <script language="javascript" type="text/javascript" src="js/jquery-latest.js"></script>

        <script type="text/javascript" src="js/sets/default/set.js"></script>

        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
        <link rel="stylesheet" type="text/css" href="css/facebox.css" />
        <script type="text/javascript" src="admin/tools/jquery.validate.js"></script>
        <script type="text/javascript" src="admin/tools/additional-methods.js"></script>


											

        <style type="text/css">

            label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }

        </style>
        <script>
            $(document).ready(function(){

                $("#myform").validate({
        
                });
            });
        </script>
		
		<?php //echo $newvalue; ?>

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



                        <p><font color="red">Please fill in the following form to Register</font></p>

                        <form method="post" id="myform">


                       
                            <div class="lileft">
                                <label>Email</label>
                                <input type="text" class="required email" name="email" style="border-color: #000000" value=<?php echo $emails; ?>>
                            </div>

                            <div class="liright">
                                <label>Password</label>                    
                                <input type="password" class="required" style="border-color: #000000" name="pwd">
                            </div><div class="lileft">
	
                                <label>First Name</label>
                                <input type="text" class="required" id="fname" name="fname" style="border-color: #000000" value=<?php echo $fnames; ?>>
								
                            </div>

                            <div class="lileft">
                                <label>Last Name</label>
                                <input type="text" class="required" name="lname" style="border-color: #000000" value=<?php echo $lnames; ?>>
                            </div>

                            <div class="lileft">
                                <label>Phone</label>
                                <input type="text" class="required digits" name="phone" style="border-color: #000000" maxlength=15 value=<?php echo $phones; ?>>
                            </div>
                            <div class="lileft">
                                <label>Address</label>
                                <input type="text" class="required" name="add" style="border-color: #000000" value=<?php echo $addresss; ?>>
                            </div>



							<div >
                                <label>Country</label>
                                <select name="country" id="model"  onchange="convertDropDownToTextBox()" style="border-color: #000000">
								
								
                                    <?php
                                    $cdd = mysqli_query($GLOBALS["___mysqli_ston"], "select * from country") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

                                    while ($cddata2 = mysqli_fetch_row($cdd)) {
                                        echo "<option value='$cddata2[1]'>$cddata2[1]</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                           

						   <div class="lileft">
                                <label>State</label>



                                <select name="state" style="border-color: #000000">
								
                                    <?php
                                  $cdd = mysqli_query($GLOBALS["___mysqli_ston"], "select * from state") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

                                    while ($cddata1 = mysqli_fetch_row($cdd)) {
                                        echo "<option value='$cddata1[1]'>$cddata1[1]</option>";
                                    }

                                    ?>
										</script>
                                </select>
										

                            </div>

							<div class="lileft">
                                <label>City</label>

                                <select name="city" style="border-color: #000000">
                                    <?php
                                    $cdd = mysqli_query($GLOBALS["___mysqli_ston"], "select * from city") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

                                    while ($cddata = mysqli_fetch_row($cdd)) {
                                        echo "<option value='$cddata[1]'>$cddata[1]</option>";
                                    }
                                    ?>
                                </select>

                            </div>
                           

                            <div class="lileft">
                                <label>Zip</label>
                                <input type="text" class="required digits" name="zip" style="border-color: #000000" maxlength=8 value=<?php echo $zips; ?>>
                            </div>
                            
                            <div class="lileft">
                                <label>Account Type</label>

                                <select name="atype" style="border-color: #000000" >
                                    <option value="">select</option>
                                    <option value="Buyer" name="atype">Buyer</option>
                                    <option value="Seller" name="atype">Seller</option>


                                </select>
                            </div>
                            <div class="lileft">
                                <label>Accept Terms <input type="checkbox" name="checking" required></label>
                                <input id="submit" type="submit" value="Register" style="border-color: #000000" name="submit">
							
                            </div>
                        </form>
                        <div class="clear"></div>

                    </div>

                </div>

            </div>

        </div>

    </body>
</html>