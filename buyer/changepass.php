
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title></title>
        <?php
        include 'include_theme/head_scripts.php';
        ?>
    </head>
    <?php
    require 'class/connection.php';
    connect();

    $msg = "";
    if ($_POST) 
        {
    
        $opass = $_POST['opass'];
        $npass = $_POST['npass'];
        $cpass = $_POST['cpass'];



        $loginid = $_SESSION["buyer"];

        $oq = mysqli_query($GLOBALS["___mysqli_ston"], "select * from registration where email =  '{$loginid}'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

        $odata = mysqli_fetch_row($oq);
        //Now Check Old Password From Database 

		if($npass==$cpass)
			{
        if ($opass == $odata[2]) 
            {
                mysqli_query($GLOBALS["___mysqli_ston"], "update registration set pwd = '{$npass}' where email = '{$loginid}'");

            if (mysqli_affected_rows($GLOBALS["___mysqli_ston"])) 
                {
            
                            $msg = "  <div class='success'>
                        
                        	Password Change 
                        </div>";
                }
        } else 
            {

        $msg = "  <div class='success'>
                        
                        	Old Password Not Matched
                        </div>";
        }
		}
			else
			{
				$msg = "  <div class='success'>
                        
                        	Confirm Password Not Matched
                        </div>";
			}

        }
        
    ?>
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

                                <h3>Password Change</h3>

                            </div>


                            <form  method="post" id="myform" action="">

                                <div>
                                    <table>

                                        <?php echo $msg; ?>
                                        <tr>
                                            <td>Old Password</td>
                                            <td><input type="password" style="border-color: #000000" name="opass"  class=" required"   /> </td>
                                        </tr>

                                        <tr>
                                            <td>New Password</td>
                                            <td><input type="password" style="border-color: #000000" name="npass"  class=" required"    /> </td>
                                        </tr>

                                        <tr>
                                            <td>Confirm Password</td>
                                            <td><input type="password" style="border-color: #000000" name="cpass"  class=" required"    /> </td>
                                        </tr>




                                        <tr>
                                            <td></td>
                                            <td>  <button class="button" title="" type="submit"><span><span>Submit</span></span></button> </td>




                                        </tr>                            </table>
                                </div>
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