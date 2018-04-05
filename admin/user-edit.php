

<?php
require 'class/connection.php';
connect();


if ($_POST) {
    $uid = $_POST["uid"];
    $uname = $_POST["uname"];

    $password = $_POST["pwd"];

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];

    $phone = $_POST["phone"];
    $add = $_POST["add"];
    $city = $_POST["city"];

    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $country = $_POST["country"];
    $atype = $_POST["atype"];

    mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE `registration` SET `uname`='{$uname}',
        `pwd`='{$password}',`fname`='{$fname}',`lname`='{$lname}',`email`='{$email}',
        `phone`='{$phone}',`add`='{$add}',`city`='{$city}',
        `state`='{$state}',`country`='{$country}',`zip`='{$zip}',
        `atype`='{$atype}' WHERE `uid`='{$uid}' ") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));


    header("location:users.php");
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

                                <h3>Edit User</h3>

                            </div>
                            <?php
                            if (isset($_GET['eid'])) {
                                $eid = $_GET['eid'];
                                $qr = mysqli_query($GLOBALS["___mysqli_ston"], "select * from registration where uid = '{$eid}'");
                                $data = mysqli_fetch_row($qr);
                            } else {

                                header("location:users.php");
                            }
                            ?>


                            <form method="post">

                                <div class="lileft">
                                    <input type="hidden" value="<?php echo $data[0]; ?>" name="uid" >

                                        <label>Username</label>
                                        <input type="text" value="<?php echo $data[1]; ?>" name="uname" style="border-color: #000000">
                                            </div>

                                            <div class="liright">
                                                <label>Password</label>                    
                                                <input type="password" value="<?php echo $data[2]; ?>" style="border-color: #000000" name="pwd">
                                            </div><div class="lileft">

                                                <label>First Name</label>
                                                <input type="text" name="fname" value="<?php echo $data[3]; ?>" style="border-color: #000000">
                                            </div>

                                            <div class="lileft">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" value="<?php echo $data[4]; ?>"  style="border-color: #000000">
                                            </div>
                                            <div class="lileft">
                                                <label>Email</label>
                                                <input type="text" name="email" value="<?php echo $data[5]; ?>"  style="border-color: #000000">
                                            </div>
                                            <div class="lileft">
                                                <label>Phone</label>
                                                <input type="text" name="phone" value="<?php echo $data[6]; ?>"  style="border-color: #000000">
                                            </div>
                                            <div class="lileft">
                                                <label>Address</label>
                                                <input type="text" name="add" value="<?php echo $data[7]; ?>"  style="border-color: #000000">
                                            </div>
                                            <div class="lileft">
                                                <label>City</label>

                                                <select name="city"  style="border-color: #000000" >
                                                    <?php
                                                    $cdd = mysqli_query($GLOBALS["___mysqli_ston"], "select * from city") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

                                                    while ($cddata = mysqli_fetch_row($cdd)) {
                                                        echo "<option value='$cddata[0]'>$cddata[1]</option>";
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
                                                        echo "<option value='$cddata1[0]'>$cddata1[1]</option>";
                                                    }
                                                    ?>
                                                </select>


                                            </div>
                                            <div class="lileft">
                                                <label>Zip</label>
                                                <input type="text" name="zip" value="<?php echo $data[11]; ?>"  style="border-color: #000000">
                                            </div>
                                            <div class="lileft">
                                                <label>Country</label>


                                                <select name="country" style="border-color: #000000">
                                                    <?php
                                                    $cdd = mysqli_query($GLOBALS["___mysqli_ston"], "select * from country") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

                                                    while ($cddata2 = mysqli_fetch_row($cdd)) {
                                                        echo "<option value='$cddata2[0]'>$cddata2[1]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="lileft">
                                                <label>Account Type</label>

                                                <select name="atype" style="border-color: #000000" >
                                                    <option value="">select</option>
                                                    <option value="Buyer" >Buyer</option>
                                                    <option value="Seller">Seller</option>


                                                </select>
                                            </div>

                                            <input type="submit" value="Update" style="border-color: #000000">

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