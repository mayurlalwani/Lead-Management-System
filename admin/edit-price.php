<?php
require 'class/connection.php';
connect();

$msg = "";
if ($_POST) {
   $txt1 = $_POST["txt1"];
   $txt2 = $_POST["txt2"];
   $txt3 = $_POST["txt3"];
   $txt4 = $_POST["txt4"];
   $txt5 = $_POST["txt5"];
   $txt6 = $_POST["txt6"];
   $txt7 = $_POST["txt7"];
   $txt8 = $_POST["txt8"];
   $txt9 = $_POST["txt9"];
   $txt10 = $_POST["txt10"];
   $txt11 = $_POST["txt11"];
   $txt12 = $_POST["txt12"];
   $txt13 = $_POST["txt13"];
   $txt14 = $_POST["txt14"];
   $txt15 = $_POST["txt15"];
   $txt16 = $_POST["txt16"];
   $txt17 = $_POST["txt17"];
   $txt18 = $_POST["txt18"];
   $txt19 = $_POST["txt19"];
   $txt20 = $_POST["txt20"];
   $txt21 = $_POST["txt21"];
   $txt22 = $_POST["txt22"];
   $txt23 = $_POST["txt23"];
   $txt24 = $_POST["txt24"];
   $txt25 = $_POST["txt25"];
   $txt26 = $_POST["txt26"];
   $txt27 = $_POST["txt27"];
   $txt28 = $_POST["txt28"];
   $txt29 = $_POST["txt29"];
  
   
   $query = "UPDATE `leads_usa` SET  `firstname`='{$txt1}',`lastname`='{$txt2}',`email`='{$txt3}',`address`='{$txt4}',
       `city`='{$txt5}',`state`='{$txt6}',`zip`='{$txt7}',
       `dob`='{$txt8}',`homephone`='{$txt9}',`workphone`='{$txt10}',`ssn`='{$txt11}',`dlno`='{$txt12}',`dlstate`='{$txt13}',`employmentstatus`='{$txt14}',
       `empname`='{$txt15}',`incometype`='{$txt16}',`income`='{$txt17}',`payperiod`='{$txt18}',`empyears`='{$txt19}',`empmonths`='{$txt20}',
       `resyears`='{$txt21}',`resmonths`='{$txt22}',`ipaddress`='{$txt23}',`bankname`='{$txt24}',`accountno`='{$txt25}',`routingno`='{$txt26}',
       `credit_debit_card_no`='{$txt27}',`cvv`='{$txt28}',`expirydate`='{$txt29}' WHERE  `lead_id` = 1";
   
    
   $msg = mysqli_query($GLOBALS["___mysqli_ston"], $query) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
   
   if($msg)
   {
       echo "<script>";
       
       echo "alert('date updated')";       echo "</script>";
       
       
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

                                <h3>Edit Price of Lead</h3>

                            </div>


<?php
$qq = mysqli_query($GLOBALS["___mysqli_ston"], "select * from leads_usa where lead_id = 1") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

$data = mysqli_fetch_row($qq);
?>

                            <form  method="post" id="myform">

                                <fieldset>

                                    <legend>Edit Price</legend>
                                <table>
                                    <tr>
                                    <div>
                                       <td> FirstName</td>
                                       <td> <input type="text" name="txt1" class="required"  value="<?php echo $data[1] ?>" />
                                    </div></td>
                                    </tr>
                                       
                                    <tr>
                                    <div>
                                       <td> Last Name</td>
                                      <td>  <input type="text" name="txt2" class="required"  value="<?php echo $data[2] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> Email</td>
                                      <td>  <input type="text" name="txt3" class="required"  value="<?php echo $data[3] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td> Address</td>
                                      <td>  <input type="text" name="txt4" class="required"  value="<?php echo $data[4] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td> City</td>
                                      <td>  <input type="text" name="txt5" class="required"  value="<?php echo $data[5] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td> State</td>
                                      <td>  <input type="text" name="txt6" class="required"  value="<?php echo $data[6] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td> Zip</td>
                                      <td>  <input type="text" name="txt7" class="required"  value="<?php echo $data[7] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td> DOB</td>
                                      <td>  <input type="text" name="txt8" class="required"  value="<?php echo $data[8] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td> Home Phone</td>
                                      <td>  <input type="text" name="txt9" class="required"  value="<?php echo $data[9] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td> Work Phone</td>
                                      <td>  <input type="text" name="txt10" class="required"  value="<?php echo $data[10] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td> SSN</td>
                                      <td>  <input type="text" name="txt11" class="required"  value="<?php echo $data[11] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td> DL No</td>
                                      <td>  <input type="text" name="txt12" class="required"  value="<?php echo $data[12] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td>DL State</td>
                                      <td>  <input type="text" name="txt13" class="required"  value="<?php echo $data[13] ?>" />
                                    </div</td>
                                    </tr>

                                    <tr>
                                    <div>
                                       <td>Employment Status</td>
                                      <td>  <input type="text" name="txt14" class="required"  value="<?php echo $data[14] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td>EMP Name</td>
                                      <td>  <input type="text" name="txt15" class="required"  value="<?php echo $data[15] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td>Income Type</td>
                                      <td>  <input type="text" name="txt16" class="required"  value="<?php echo $data[16] ?>" />
                                    </div</td>
                                    </tr>

                                     <tr>
                                    <div>
                                       <td> Income</td>
                                      <td>  <input type="text" name="txt17" class="required"  value="<?php echo $data[17] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td>Pay Period</td>
                                      <td>  <input type="text" name="txt18" class="required"  value="<?php echo $data[18] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> Emp Years</td>
                                      <td>  <input type="text" name="txt19" class="required"  value="<?php echo $data[19] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> Emp Months</td>
                                      <td>  <input type="text" name="txt20" class="required"  value="<?php echo $data[20] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> Res Years</td>
                                      <td>  <input type="text" name="txt21" class="required"  value="<?php echo $data[21] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> Res Months</td>
                                      <td>  <input type="text" name="txt22" class="required"  value="<?php echo $data[22] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td>IP Address</td>
                                      <td>  <input type="text" name="txt23" class="required"  value="<?php echo $data[23] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> Bank Name</td>
                                      <td>  <input type="text" name="txt24" class="required"  value="<?php echo $data[24] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> Account No</td>
                                      <td>  <input type="text" name="txt25" class="required"  value="<?php echo $data[25] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> Routing No</td>
                                      <td>  <input type="text" name="txt26" class="required"  value="<?php echo $data[26] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> Credit_Debit_Card_No</td>
                                      <td>  <input type="text" name="txt27" class="required"  value="<?php echo $data[27] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> CVV</td>
                                      <td>  <input type="text" name="txt28" class="required"  value="<?php echo $data[28] ?>" />
                                    </div</td>
                                    </tr>
                                     <tr>
                                    <div>
                                       <td> Expiry Date</td>
                                      <td>  <input type="text" name="txt29" class="required"  value="<?php echo $data[29] ?>" />
                                    </div</td>
                                    </tr>
                                    
                                     <tr>
                                    <div>
                                       <td> </td>
                                      <td>  <button class="button" title="" type="submit"><span><span>Submit</span></span></button> </td>
                                    </div</td>
                                    </tr>



                                    
                                        </table>
                                   
                                    

                                </fieldset>

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