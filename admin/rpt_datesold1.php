<?php
session_start();
require 'class/connection.php';
connect();
?>
<!DOCTYPE html>
<!-- saved from url=(0058)http://www.binarytides.com/blog_files/invoice/invoice.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Report</title>

    <body>
        <div id="wrapper">
            <center>               
                <tr border="0">

<!--    <img src="proimg/logo.png"  style="margin-left: -30px;" width="150" >    -->

                    <td style="font-size: 100px;"> <center><h1>LMS Sold LeadFile Reports</h1></center></td>
            </center>

        </tr>
        <tr>
            <td><hr></td> 
        </tr>
        <tr>
            <!-- <td style="margin-left: -400px;"><left><a href='' onClick="window.print()">Print </a></left></td> -->
        </tr>
        <br>
        <div id="content">

            <div id="invoice_body">
                <center><table border="1" cellpadding="5" cellspacing="0">
                        <tbody><tr style="background:#eee;">
                                <th>SID</th>
                                <th>Sold Date</th>
                                <th>File Id</th>
								<th>File Name</th>
								<th>File Path</th>
								<th>Sell Amount</th>
                                



                            </tr>
                        </tbody>
                        
                           <?php
                        
                           $sdate = $_POST["sdate"];
                           $edate = $_POST["edate"];
                           echo "<b>From:-</b>".$sdate."<br>";
						   echo "<b>To:-</b>".$edate;
                      $jo1="select * from sold_files where solddate between '$sdate' and '$edate'";



					  $q1 = mysqli_query($GLOBALS["___mysqli_ston"], $jo1) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

                        $a = 0;
                        while ($data = mysqli_fetch_row($q1)) {
							$fids= "$data[1]";
							echo "<tbody><tr>";	
                            echo "
                            <td style='text-align:left; padding-left:10px;'>$data[0]</td>
							<td style='text-align:left; padding-left:10px;'>$data[3]</td>
                            <td style='text-align:left; padding-left:10px;'>$data[2]</td>";

							$jo2="select * from leads_file where leadfileid=$fids";
							$q2 = mysqli_query($GLOBALS["___mysqli_ston"], $jo2) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
							while ($data2 = mysqli_fetch_row($q2)) {
							echo "<td style='text-align:left; padding-left:10px;'>$data2[2]</td>";
							echo "<td style='text-align:left; padding-left:10px;'>$data2[1]</td>";
							echo "<td style='text-align:left; padding-left:10px;'>$data2[6]</td>";
							
							
							}
echo "			</tr>			
					</tbody>";
                            $a++;
                        
						}
                        ?>


                    </table><?php echo "<br><br><b>Total No. Of Records:-$a </b>"?></center>
</div>
</div>

                </sethtmlpagefooter></body>
                </html>