<?php

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
                    
                <td style="font-size: 100px;"> <center><h1>LMS User Type Reports</h1></center></td>
    </center>
                   
</tr>
<tr>
<td><hr></td> 
</tr>
<tr>
    <!-- <td style="margin-left: -400px;"><left><a href='' onClick="window.print()">Print </a></left></td> -->
        </tr>
       <br>
         <form method="post">
            
            Select Buyer : 
            <select name="atype">

                    
                <option value="Buyer" >Buyer</option>
                <option value="Seller" >Seller</option>
              
                
                </select>
            
                <input type="submit">
        </form>
      <?php if($_POST){ ?>
   	<div id="content">
		
		<div id="invoice_body">
                    <center><table border="1" cellpadding="5" cellspacing="0">
			<tbody><tr style="background:#eee;">
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
			</tr>
			</tbody>
			   <?php
                  
                                            $jo="SELECT
    `registration`.`uid`,
    `registration`.`fname`
    , `registration`.`lname`
    , `registration`.`email`
    , `registration`.`phone`
    , `registration`.`add`
    , `city`.`city_name`
    , `state`.`state_name`
    , `country`.`co_name`
     , `registration`.`zip`
    , `registration`.`atype`
    , `registration`.`rtime`
FROM
    `state`
    INNER JOIN `registration` 
        ON (`state`.`state_id` = `registration`.`state`)
    INNER JOIN `city` 
        ON (`city`.`city_id` = `registration`.`city`)
    INNER JOIN `country` 
        ON (`country`.`co_id` = `registration`.`country`)
        where `registration`.`atype` = '{$_POST['atype']}' ";
                                           
                                            $q=  mysqli_query($GLOBALS["___mysqli_ston"], $jo)or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
                                            
                                            
                                            while($data=  mysqli_fetch_row($q))
                                            {
                      echo "
			<tbody><tr>
			 			    <td style='text-align:left; padding-left:10px;'>$data[0]</td>
			    <td style='text-align:left; padding-left:10px;'>$data[1]</td>
                            <td style='text-align:left; padding-left:10px;'>$data[2]</td>
                            <td style='text-align:left; padding-left:10px;'>$data[3]</td>
                            <td style='text-align:left; padding-left:10px;'>$data[4]</td>
                            <td style='text-align:left; padding-left:10px;'>$data[5]</td>
                                    <td style='text-align:left; padding-left:10px;'>$data[6]</td>
                                            <td style='text-align:left; padding-left:10px;'>$data[7]</td>
                                                    <td style='text-align:left; padding-left:10px;'>$data[8]</td>  
                                                        <td style='text-align:left; padding-left:10px;'>$data[9]</td>
                                                           <td style='text-align:left; padding-left:10px;'>$data[10]</td>
                                                     
                                                        
			    
			</tr>			
					</tbody>";
                                            }
                    ?>
                        </table></center>
			
		
</sethtmlpagefooter>
                
                
<?php } ?>
                </body>
                </html>