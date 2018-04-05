<?php
require 'class/connection.php';
connect();


$msg = "";
if(isset($_GET['did']))
{
    
   
    
    $did = $_GET['did'];
    
  $dq =   mysqli_query($GLOBALS["___mysqli_ston"], "delete from registration where uid = $did ") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    
  if($dq)
  {
      $msg = "   <div class='success'>Row Delete </div>";
  }
}

if(isset($_GET['update']))
{
    $id2 = $_POST['id'];
    $sname = $_POST['sname'];
    $cname = $_POST['cname'];
    
    mysqli_query($GLOBALS["___mysqli_ston"], "update state set state_name = '{$sname}', co_id = '{$cname}' where state_id = '{$id2}'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    header("location:state_display.php");
}

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
         <script type="text/javascript">// <![CDATA[
function confirmDelete(delUrl) {
    if (confirm("Are you sure you want to delete")) {
        document.location = delUrl;
        
     
    }
}
</script>
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

              
                    ?>
                    <!--/sidebar-->

                    <div class="grid_12 content omega">

                        <div class="content-box">

                            <div class="content-header">

                                <h3>Users</h3>

                            </div>






                            <?php
                            echo $msg;
                            ?>

                            
                            <a href="">Add New</a>
                            <div style="overflow-x: scroll;">
                                    <table>
                                        <th>Action</th>
                                        <th>ID</th>
                                       
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Country</th>
                                     
                                        <th>Account Type</th>
                                        <th>Registration Time</th>
                                        
                                        <?php
                                        $users = "SELECT
    `registration`.`uid`,
    `registration`.`fname`
    , `registration`.`lname`
    , `registration`.`email`
    , `registration`.`phone`
    , `registration`.`add`
    , `city`.`city_name`
    , `state`.`state_name`
    , `country`.`co_name`
    , `registration`.`atype`
    , `registration`.`rtime`
FROM
    `state`
    INNER JOIN `registration` 
        ON (`state`.`state_id` = `registration`.`state`)
    INNER JOIN `city` 
        ON (`city`.`city_id` = `registration`.`city`)
    INNER JOIN `country` 
        ON (`country`.`co_id` = `registration`.`country`)";
                                        $a = mysqli_query($GLOBALS["___mysqli_ston"], $users);

                                        ?>
                                        <tr>
                                            <?php
                                            while ($data = mysqli_fetch_row($a))
                                            {
                                            ?>
                                            <td><a href='user-edit.php?eid=<?php echo $data[0];?>'><img src="images/edit-icon.png" width="20" height="20"/></a><a href=javascript:confirmDelete('users.php?did=<?php echo $data[0];?>')><img src="images/DeleteRed.png" width="20" height="20"/></a></td> 
                                            <td><?php echo $data[0]?></td>
                                            <td><?php echo $data[1]?></td>
                                            <td><?php echo $data[2]?></td>
                                            <td><?php echo $data[3]?></td>
                                            <td><?php echo $data[4]?></td>
                                            <td><?php echo $data[5]?></td>
                                            <td><?php echo $data[6]?></td>
                                            <td><?php echo $data[7]?></td>
                                            <td><?php echo $data[8]?></td>
                                            <td><?php echo $data[9]?></td>
                                            <td><?php echo $data[10]?></td>
                                         
                                            
                                        </tr>
                                        <?php
                                            }
                                            ?>
                                        
                                    </table>                              

                                        
                                </div>
                            



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