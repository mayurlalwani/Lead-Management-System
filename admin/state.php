<?php
require 'class/connection.php';
connect();

$msg = "";
if ($_POST) {

    $sname = $_POST["sname"];
    $coname = $_POST["cname"];
    $q = mysqli_query($GLOBALS["___mysqli_ston"], "insert into state(state_name,co_id)values('{$sname}','{$coname}')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));


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

                                <h3>State</h3>

                            </div>

                            <?php
                            if(isset($_GET['eid']))
                            {
                                $eid = $_GET['eid'];
                                $qr = mysqli_query($GLOBALS["___mysqli_ston"], "select * from state where state_id='{$eid}'");
                                $data1 = mysqli_fetch_row($qr);
                            
                            
                            ?>
                            <form  method="post" id="myform" action="state_process.php?update">

                                <div>
                                    <table>
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id" value="<?php echo $data1[0]; ?>"></input>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>State Name</td>
                                            <td><input type="text" style="border-color: #000000" name="sname" value="<?php echo $data1[1]; ?>" class=" required" id="name"  tabindex="1" /> </td>
                                        </tr>


                                        <tr>      
                                            <td> Country </td> 
                                            <td>
                                                <select name="cname">
                                                    <?php
                                                    $cdd = mysqli_query($GLOBALS["___mysqli_ston"], "select * from country") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

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

                            <?php
                            }
                            else
                            {
                            ?>



                            <?php
                            echo $msg;
                            ?>

                            <form  method="post" id="myform">

                                <div>
                                    <table >


                                        <tr>
                                            <td>State Name</td>
                                            <td><input type="text" name="sname" class=" required" id="name"  tabindex="1" /> </td>
                                        </tr>


                                        <tr>      
                                            <td> Country </td> 
                                            <td>
                                                <select name="cname">
                                                    <?php
                                                    $cdd = mysqli_query($GLOBALS["___mysqli_ston"], "select * from country") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

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

                            <?php
                            }
                            ?>

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