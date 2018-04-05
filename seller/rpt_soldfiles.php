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
                                <th>ID</th>
                                <th>Sold Date</th>
                                <th>Amount </th>
                                <th>BuyerID</th>
                                <th>File Name</th>


                            </tr>
                        </tbody>
                        <?php
                        $uid = $_SESSION["uid"];
                        $jo = "SELECT
    `sold_files`.`sid`
    , `sold_files`.`solddate`
    , `leads_file`.`amount`
    , `sold_files`.`buyerid`
    , `leads_file`.`leadfilename`
    , `leads_file`.`uid`
    ,SUM(`leads_file`.`amount`)
    
FROM
    `leads_file`
    INNER JOIN `sold_files` 
        ON (`leads_file`.`leadfileid` = `sold_files`.`fileid`)
        where `leads_file`.`uid` = $uid
";


                        $q = mysqli_query($GLOBALS["___mysqli_ston"], $jo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));


                        $jo1 = "SELECT
    `sold_files`.`sid`
    , `sold_files`.`solddate`
    , `leads_file`.`amount`
    , `sold_files`.`buyerid`
    , `leads_file`.`leadfilename`
    , `leads_file`.`uid`
 
FROM
    `leads_file`
    INNER JOIN `sold_files` 
        ON (`leads_file`.`leadfileid` = `sold_files`.`fileid`)
        where `leads_file`.`uid` = $uid
";





                        $dad = mysqli_fetch_row($q);
                        $amount = $dad[6];




                        $q1 = mysqli_query($GLOBALS["___mysqli_ston"], $jo1) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

                        $a = 0;
                        while ($data = mysqli_fetch_row($q1)) {
                            echo "
			<tbody><tr>
                            <td style='text-align:left; padding-left:10px;'>$data[0]</td>
			    <td style='text-align:left; padding-left:10px;'>$data[1]</td>
                            <td style='text-align:left; padding-left:10px;'>$data[2]</td>
                            <td style='text-align:left; padding-left:10px;'>$data[3]</td>
                            <td style='text-align:left; padding-left:10px;'>$data[4]</td>
                       
        
                         
                                                        
			    
			</tr>			
					";
                            $a++;
                        }



                        echo "<tr>";
                        echo "<h2>Total Amount :" . $amount;
                        echo "<h2>Total No of File Sold :" . $a;

                        echo "</tr></tbody>";
                        ?>


                    </table></center>


                </sethtmlpagefooter></body>
                </html>