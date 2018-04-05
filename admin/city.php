<?php
require 'class/connection.php';
connect();

$msg = "";
if ($_POST) {

    $cname = $_POST["cname"];
    $sname = $_POST["sname"];
    $q = mysqli_query($GLOBALS["___mysqli_ston"], "insert into city(city_name,state_id)values('{$cname}','{$sname}')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));


    if ($q) {
        $msg = "  <div class='success'>
                        
                        	Data Inserted
                        </div>";
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title></title>
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

                                <h3>City</h3>

                            </div>






                            <?php
                            echo $msg;
                            ?>

                            <form  method="post" id="myform">

                                <div>
                                    <table >


                                        <tr>
                                            <td>City Name</td>
                                            <td><input type="text" style="border-color: #000000" name="cname" class=" required" id="name"  tabindex="1" /> </td>
                                        </tr>


                                        <tr>      
                                            <td> State Name</td> 
                                            <td>
                                                <select style="border-color: #000000" name="sname">
                                                    <?php
                                                    $cdd = mysqli_query($GLOBALS["___mysqli_ston"], "select * from state") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

                                                    while ($cddata = mysqli_fetch_row($cdd)) {
                                                        echo "<option value='$cddata[0]'>$cddata[1]</option>";
                                                    }
                                                    ?>
                                                </select>

                                            </td>
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